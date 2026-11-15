<?php

namespace App\Filament\Resources\StudyProgramSections\Pages;

use App\Filament\Resources\StudyProgramSections\StudyProgramSectionResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditStudyProgramSection extends EditRecord
{
    protected static string $resource = StudyProgramSectionResource::class;

    protected ?string $oldImage = null;

    protected function beforeSave(): void
    {
        // Simpan path gambar lama sebelum diperbarui
        $this->oldImage = $this->getRecord()->getRawOriginal('image_url');
    }

    protected function afterSave(): void
    {
        // Ambil path gambar terbaru
        $newImage = $this->getRecord()->image_url;

        // Hapus gambar lama jika gambar berubah
        if ($this->oldImage && $this->oldImage !== $newImage) {
            Storage::disk('public')->delete($this->oldImage);
        }
    }

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make()
                ->before(function ($record) {
                    if (Storage::disk('public')->exists($record->image_url)) {
                        Storage::disk('public')->delete($record->image_url);
                    }
                }),
        ];
    }
}
