/* MOBILE NAV TOGGLE */
const navToggle = document.getElementById('navToggle');
const navLinks = document.getElementById('navLinks');
navToggle?.addEventListener('click', () => {
  const isOpen = navLinks.style.display === 'flex';
  navLinks.style.display = isOpen ? 'none' : 'flex';
  Object.assign(navLinks.style, { flexDirection:'column', position:'absolute', top:'64px', right:'24px', background:'#F1F3EA', border:'1px solid #CBD0BC', borderRadius:'14px', padding:'14px 22px', gap:'14px', zIndex:50 });
});

/* SCROLLSPY -- MAIN NAVBAR */
const mainSections = document.querySelectorAll('section[id]');
const mainLinks = document.querySelectorAll('.nav-links a');
window.addEventListener('scroll', () => {
  let current = '';
  mainSections.forEach(sec => { if (window.scrollY >= sec.offsetTop - 140) current = sec.getAttribute('id'); });
  mainLinks.forEach(a => a.classList.toggle('active', a.getAttribute('href') === '#' + current));
  document.getElementById('fabTop')?.classList.toggle('show', window.scrollY > 500);
});
document.getElementById('fabTop')?.addEventListener('click', () => window.scrollTo({top:0, behavior:'smooth'}));

/* SCROLL REVEAL ANIMATION */
const io = new IntersectionObserver((entries) => {
  entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); } });
}, { threshold: 0.12 });
document.querySelectorAll('.reveal').forEach(el => io.observe(el));

/* HERO COVER CAROUSEL */
const hcTrack = document.getElementById('hcTrack');
const hcSlides = document.querySelectorAll('.hc-slide');
const hcDotsWrap = document.getElementById('hcDots');
const hcPrev = document.getElementById('hcPrev');
const hcNext = document.getElementById('hcNext');
let hcCurrent = 0;
const hcTotal = hcSlides.length;

hcSlides.forEach((_, i) => {
  const dot = document.createElement('button');
  dot.className = 'hc-dot' + (i === 0 ? ' active' : '');
  dot.addEventListener('click', () => hcGoTo(i));
  hcDotsWrap?.appendChild(dot);
});
const hcDots = document.querySelectorAll('.hc-dot');

function hcGoTo(i){
  hcCurrent = (i + hcTotal) % hcTotal;
  hcTrack.style.transform = `translateX(-${hcCurrent * (100 / hcTotal)}%)`;
  hcDots.forEach((d, idx) => d.classList.toggle('active', idx === hcCurrent));
}
hcPrev?.addEventListener('click', () => { hcGoTo(hcCurrent - 1); resetAutoplay(); });
hcNext?.addEventListener('click', () => { hcGoTo(hcCurrent + 1); resetAutoplay(); });

let hcAutoplay = setInterval(() => hcGoTo(hcCurrent + 1), 6000);
function resetAutoplay(){ clearInterval(hcAutoplay); hcAutoplay = setInterval(() => hcGoTo(hcCurrent + 1), 6000); }

/* PROFIL DESA -- SIDEBAR SCROLLSPY */
const psLinks = document.querySelectorAll('.ps-link');
const profilBlocks = document.querySelectorAll('.profil-block[id]');
psLinks.forEach(link => {
  link.addEventListener('click', (e) => {
    e.preventDefault();
    const target = document.querySelector(link.getAttribute('href'));
    if (target) window.scrollTo({ top: target.offsetTop - 96, behavior: 'smooth' });
  });
});
window.addEventListener('scroll', () => {
  let currentBlock = '';
  profilBlocks.forEach(block => { if (window.scrollY >= block.offsetTop - 160) currentBlock = block.getAttribute('id'); });
  psLinks.forEach(a => a.classList.toggle('active', a.getAttribute('href') === '#' + currentBlock));
});

/* ACCORDION */
function toggleAcc(headEl){
  const item = headEl.parentElement;
  const body = item.querySelector('.acc-body');
  const wasOpen = item.classList.contains('open');
  document.querySelectorAll('.acc-item').forEach(i => {
    i.classList.remove('open');
    i.querySelector('.acc-body').style.maxHeight = null;
  });
  if (!wasOpen){
    item.classList.add('open');
    body.style.maxHeight = body.scrollHeight + 'px';
  }
}

/* COUNTER */
window.addEventListener('load', () => {
  document.querySelectorAll('.counter').forEach(el => {
    const target = parseInt(el.dataset.target) || 0;
    const duration = 2000;
    const start = Date.now();
    function update(){
      const elapsed = Date.now() - start;
      const progress = Math.min(elapsed / duration, 1);
      el.textContent = Math.floor(target * progress).toLocaleString();
      if (progress < 1) requestAnimationFrame(update);
    }
    update();
  });
});
