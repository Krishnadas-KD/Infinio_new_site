const colorViewer = document.querySelector("model-viewer#colorViewer");
const colorGradeEffect = colorViewer.querySelector('color-grade-effect');
const colorGrading = colorViewer.querySelector('#colorgrading');
const tonemapping = colorViewer.querySelector('#tonemapping');

colorGrading.addEventListener('change', (e) => colorGradeEffect.blendMode = e.target.checked ? 'default' : 'skip');
tonemapping.addEventListener('input', (e) => colorGradeEffect.tonemapping = e.target.value);