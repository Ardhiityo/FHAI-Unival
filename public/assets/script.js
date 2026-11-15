const root = document.documentElement;
const themeButton = document.getElementById('theme-toggle');
const themeIcon = themeButton.querySelector('.theme-icon');
const menuButton = document.getElementById('menu-toggle');
const navLinks = document.getElementById('nav-links');
const island = document.querySelector('.island');

function applyTheme(theme) {
  root.dataset.theme = theme;
  themeIcon.textContent = theme === 'dark' ? '☀' : '☾';
  themeButton.setAttribute('aria-label', theme === 'dark' ? 'Aktifkan mode terang' : 'Aktifkan mode gelap');
  document.querySelector('meta[name="theme-color"]').content = theme === 'dark' ? '#111322' : '#f7f7fb';
}

let savedTheme = null;
try { savedTheme = localStorage.getItem('fhai-theme'); } catch (_) { /* Storage may be disabled by the browser. */ }
applyTheme(savedTheme === 'dark' ? 'dark' : 'light');
themeButton.addEventListener('click', () => {
  const nextTheme = root.dataset.theme === 'dark' ? 'light' : 'dark';
  applyTheme(nextTheme);
  try { localStorage.setItem('fhai-theme', nextTheme); } catch (_) { /* Theme still works for this session. */ }
});

menuButton.addEventListener('click', () => {
  const isOpen = menuButton.getAttribute('aria-expanded') === 'true';
  menuButton.setAttribute('aria-expanded', String(!isOpen));
  menuButton.setAttribute('aria-label', isOpen ? 'Buka menu' : 'Tutup menu');
  menuButton.classList.toggle('active', !isOpen);
  navLinks.classList.toggle('open', !isOpen);
});
navLinks.querySelectorAll('a').forEach((link) => link.addEventListener('click', () => {
  menuButton.setAttribute('aria-expanded', 'false');
  menuButton.setAttribute('aria-label', 'Buka menu');
  menuButton.classList.remove('active');
  navLinks.classList.remove('open');
}));

let scrollFrame = false;
window.addEventListener('scroll', () => {
  if (scrollFrame) return;
  scrollFrame = true;
  window.requestAnimationFrame(() => {
    island.classList.toggle('compact', window.scrollY > 36);
    scrollFrame = false;
  });
}, { passive: true });

const modal = document.getElementById('video-modal');
const videoButton = document.getElementById('video-button');
const closeButton = document.getElementById('modal-close');
function closeModal() {
  modal.classList.remove('open');
  modal.setAttribute('aria-hidden', 'true');
  document.body.style.overflow = '';
  videoButton.focus();
}
videoButton.addEventListener('click', () => {
  modal.classList.add('open');
  modal.setAttribute('aria-hidden', 'false');
  document.body.style.overflow = 'hidden';
  closeButton.focus();
});
closeButton.addEventListener('click', closeModal);
modal.querySelector('[data-close-modal]').addEventListener('click', closeModal);
document.addEventListener('keydown', (event) => {
  if (event.key === 'Escape' && modal.classList.contains('open')) closeModal();
});
