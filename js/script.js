
// Create the scene, camera, and renderer
var scene = new THREE.Scene();
var camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 1000);
var renderer = new THREE.WebGLRenderer();

// Set up the renderer size and append it to the header container
renderer.setSize(window.innerWidth, window.innerHeight);
document.getElementById("header-container").appendChild(renderer.domElement);

// Load the 3D model
var loader = new THREE.GLTFLoader();
loader.load('/InfinioLogo.glb', function(gltf) {
  var model = gltf.scene;
  
  // Position and scale the model as needed
  model.position.set(0, 0, 0);
  model.scale.set(1, 1, 1);
  
  // Add the model to the scene
  scene.add(model);
});

// Set up the camera position
camera.position.z = 5;
scene.background = new THREE.Color(0xffffff);
// Render the scene
function animate() {
  requestAnimationFrame(animate);
  renderer.setSize(containerWidth, containerHeight);
  renderer.render(scene, camera);
}
animate();
