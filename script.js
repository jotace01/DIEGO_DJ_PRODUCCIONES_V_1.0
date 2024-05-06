function syncPointer({ x: pointerX, y: pointerY }) {
  const x = pointerX.toFixed(0);
  const y = pointerY.toFixed(0);
  const xp = (pointerX / window.innerWidth).toFixed(0);
  const yp = (pointerY / window.innerHeight).toFixed(0);
  document.documentElement.style.setProperty('--x', x);
  document.documentElement.style.setProperty('--xp', xp);
  document.documentElement.style.setProperty('--y', y);
  document.documentElement.style.setProperty('--yp', yp);
}
document.body.addEventListener('pointermove', syncPointer);