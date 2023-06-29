import { createApp } from 'vue'
import './style.css'
import App from './App.vue'
import {GLTFLoader} from 'three/examples/jsm/loaders/GLTFLoader.js'
import { Scene } from 'three'

import SceneInit from './lib/SceneInit'

createApp(App).mount('#app')

const test=new SceneInit('myThreejsCanavas')
test.initialize();
test.animate();

const glftLoader=new GLTFLoader()
glftLoader.load('./models/scene.gltf',function(gltfScene){
    test.scence.add(gltfScene.Scene);
});