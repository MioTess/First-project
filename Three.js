<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Ширээ сандал</title>
<style>
body { margin: 0; }
</style>
</head>
<body>
        <script type="importmap">
            {
              "imports": {
                "three": "./three.js-master/build/three.module.js"
              }
            }
          </script>
 
<script type="module">
            import * as THREE from 'three';
            var alpx=0,alpy=0,alpz=0;
            const scene = new THREE.Scene();
            const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 );
 
            const renderer = new THREE.WebGLRenderer();
            renderer.setSize( window.innerWidth, window.innerHeight );
            renderer.setClearColor( 0xffffff );
            document.body.appendChild( renderer.domElement );
 
            const gridHelper = new THREE.GridHelper( 80, 80 );
            scene.add( gridHelper );
            gridHelper.rotation.x = Math.PI/2;
 
            const axesHelper = new THREE.AxesHelper( 15 );
            scene.add( axesHelper );

            const light1 = new THREE.AmbientLight( 0x404040 ); // soft white light
            scene.add( light1 );
 
            const light = new THREE.PointLight( 0xffffff, 2, 500 );
            light.position.set( 30, 30, 30 );
            scene.add( light );



 
            //ene zaind function bichne shvv!!!!!

            function shiree(r,h)
            {
                var grp = new THREE.Group();
                const tavtsangeometry = new THREE.CylinderGeometry(r,r,h,50,2);
                const holgeometry = new THREE.CylinderGeometry(r/10,r/10,h*10);
                const suurigeometry = new THREE.CylinderGeometry(r/2,r/2,h/2,50,2);
                const material = new THREE.MeshLambertMaterial({color:0xffffff});
                const texture = new THREE.TextureLoader().load("table.png");
                material.map = texture;
                
                const tavtsan = new THREE.Mesh(tavtsangeometry,material);
                tavtsan.rotation.x=Math.PI/2;
                tavtsan.position.z=h/2;
                tavtsan.position.set(0,0,h*10);
                grp.add(tavtsan);
                
                const hol = new THREE.Mesh(holgeometry,material);
                hol.rotation.x=Math.PI/2;
                hol.position.set(0,0,h*5);
                grp.add(hol);
               
                const suuri = new THREE.Mesh(suurigeometry,material);
                suuri.rotation.x=Math.PI/2;
                suuri.rotation.z=0;
                suuri.position.set(0,0,0);
                grp.add(suuri);
                return grp;
            }
            
            function sandal(r,h) {
            var grp = new THREE.Group();
            const sandalgeometry = new THREE.CylinderGeometry(r,r,h,50,2);
            const material = new THREE.MeshLambertMaterial({color:0xffffff});
                const texture = new THREE.TextureLoader().load("table.png");
                material.map = texture;
            const sandal = new THREE.Mesh(sandalgeometry, material);
            sandal.rotation.x=Math.PI/2;
            sandal.rotation.z=0;
            grp.add(sandal);
            return grp;
            }
               
            function ayga(r,h){
              
              var grp = new THREE.Group();
              const geometry = new THREE.CylinderGeometry(r, r, h, 50, 2, true);
              const bariulgeometry = new THREE.TorusGeometry(r/1.5, r/8, 30, 30, Math.PI);
              const eroolgeometry = new THREE.CircleGeometry(r, 32);
              const biematerial = new THREE.MeshLambertMaterial();
              biematerial.color = new THREE.Color(0xffffff);
              biematerial.side = THREE.DoubleSide;
              const texture = new THREE.TextureLoader().load("ayga.jpg");
              biematerial.map = texture;
              
              const cylinder = new THREE.Mesh( geometry, biematerial );
              cylinder.rotation.x=Math.PI/2;
              cylinder.position.z=h/2;
              grp.add(cylinder);
              
              const bariul = new THREE.Mesh(bariulgeometry, biematerial);
              bariul.rotation.y = Math.PI/2;
              bariul.rotation.z =Math.PI;
              bariul.position.set(0, -r, h/2);
              grp.add(bariul);

              const geometry1 = new THREE.CylinderGeometry(r-r/15, r-r/15, h, 50, 2, true);
              const material = new THREE.MeshLambertMaterial();
              const dotor = new THREE.Mesh(geometry1, material);
              material.color = new THREE.Color(0xffffff);
              material.side = THREE.DoubleSide;
              dotor.rotation.x=Math.PI/2;
              dotor.position.z=h/2;
              grp.add(dotor);
              const erool = new THREE.Mesh(eroolgeometry, material);
              grp.add(erool);

              const geometry2 = new THREE.TorusGeometry(29*r/30, r/10, 30, 30);
              const amsar = new THREE.Mesh(geometry2, material);
              amsar.position.z = h;
              grp.add(amsar);
              return grp;
            }
            function togoo(r, r1, h)
            {
              var grp = new THREE.Group();
              const geometry = new THREE.CylinderGeometry(r, r1, h, 50, 3, true);
              const eroolgeometry = new THREE.CircleGeometry(r1, 32);
              const bariulgeometry = new THREE.TorusGeometry(r/3, r1/8, 30, 30, Math.PI)
              const bariul1geometry = new THREE.TorusGeometry(r/3, r1/8, 30, 30, Math.PI)
              const material = new THREE.MeshLambertMaterial();
              material.color = new THREE.Color(0xffffff);
              material.side = THREE.DoubleSide;
              const texture = new THREE.TextureLoader().load("ayga.jpg");
              material.map = texture;
              const togoo = new THREE.Mesh(geometry, material);
              togoo.rotation.x=Math.PI/2;
              togoo.position.z=h/2;
              grp.add(togoo);
            
              const bariul = new THREE.Mesh(bariulgeometry, material);
              //bariul.rotation.y = Math.PI/2;
              bariul.rotation.z =Math.PI;
              bariul.position.set(0, -r, h);
              grp.add(bariul);

              const bariul1 = new THREE.Mesh(bariulgeometry, material);
              //bariul1.rotation.y = Math.PI;
              bariul1.rotation.z =Math.PI/90;
              bariul1.position.set(0, r, h);
              grp.add(bariul1);

              const geometry1 = new THREE.CylinderGeometry(r-r/15, r1-r/15, h, 50, 3, true);
              const material1 = new THREE.MeshLambertMaterial();
              const dotor = new THREE.Mesh(geometry1, material1);
              material1.color = new THREE.Color(0xffffff);
              material1.side = THREE.DoubleSide;
              dotor.rotation.x=Math.PI/2;
              dotor.position.z=h/2;
              grp.add(dotor);
              const erool = new THREE.Mesh(eroolgeometry, material1);
              grp.add(erool);

              const geometry2 = new THREE.TorusGeometry(29*r/30, r/10, 30, 30);
              const amsar = new THREE.Mesh(geometry2, material);
              amsar.position.z = h;
              grp.add(amsar);

              const taggeo = new THREE.ConeGeometry(r, 1,16);
              const tagMat = new THREE.MeshLambertMaterial();
              const tag = new THREE.Mesh(taggeo,tagMat);
              tagMat.color = new THREE.Color(0xF6E2E2);
              tagMat.opacity = 0.5;
              tagMat.transparent= true;
              tag.rotation.x = Math.PI/2;
              tag.position.z= h+0.5;
              grp.add(tag);

              const tagbariulgeo= new THREE.SphereGeometry(r/5,32,16);
              const tagbariulMat = new THREE.MeshLambertMaterial();
              const tagbariul = new THREE.Mesh(tagbariulgeo, tagbariulMat);
              tagbariulMat.color = new THREE.Color(0x000000);
              tagbariulMat.side= THREE.DoubleSide;
              tagbariul.rotation.x= Math.PI/2;
              tagbariul.position.z= h+0.7;
              grp.add(tagbariul);

              return grp;
            } 
            function haluunsaw1(rad,undur)
            {
              var grouphalsaw=new THREE.Group();
              const geometry=new THREE.CylinderGeometry(rad,rad,undur,50,2,true)
              const biematerial= new THREE.MeshLambertMaterial();
              biematerial.color=new THREE.Color(0xffffff);
              biematerial.side=THREE.DoubleSide;
              const texture = new THREE.TextureLoader().load("haluunsaw.jpg");
              biematerial.map=texture;
              const cylinder=new THREE.Mesh(geometry,biematerial);
              cylinder.rotation.x=Math.PI/2;
              cylinder.position.z=undur/2;
              grouphalsaw.add(cylinder);

               //yrool
            const hsgeo = new THREE.CircleGeometry(rad,32);
            const hsMat = new THREE.MeshBasicMaterial( {color: 0x005400} );
            const hs = new THREE.Mesh( hsgeo, hsMat );
            grouphalsaw.add(hs);

             //bariul
             const hsgeometry4 = new THREE.TorusGeometry(rad/1.5, rad/8, 30, 30,Math.PI);
             const bariulMat = new THREE.MeshBasicMaterial( {color: 0x005400} );
            const bariul = new THREE.Mesh(hsgeometry4, bariulMat);
            bariul.rotation.y = Math.PI/2;
            bariul.rotation.z = Math.PI;
            bariul.position.set(0,-rad,2*undur/2.5);
            grouphalsaw.add(bariul);

            //hvree
            const hvreegeo= new THREE.TorusGeometry(29*rad/30, rad/8, 30, 30);
            const hvreeMat = new THREE.MeshBasicMaterial( {color: 0x005400} );
            const hvree = new THREE.Mesh(hvreegeo, hvreeMat);
            hvree.rotation.z = Math.PI;
            hvree.position.set(0,rad-rad,undur);
            grouphalsaw.add(hvree);

            //hureenii deed tal
            const hureeuupgeo = new THREE.SphereGeometry( rad, 64, 32,0,Math.PI * 2,0.5,1 );
          
            const hureeup = new THREE.Mesh( hureeuupgeo, biematerial );
            biematerial.side=THREE.DoubleSide;
            hureeup.rotation.x = Math.PI/2;
            hureeup.position.set(0,rad-rad,undur);
            grouphalsaw.add(hureeup);

            //amsar

            const amsargeo = new THREE.CylinderGeometry( rad/2, rad/2, undur/5,50,2,true);
            
            const amsar = new THREE.Mesh( amsargeo, biematerial );
            amsar.rotation.x = Math.PI/2;
            amsar.position.set(0,rad-rad,undur+0.7);
            grouphalsaw.add(amsar)

            //amsar dotor tal

            const amsar2geo = new THREE.TorusGeometry( rad/3, rad/5, 30,30);
            const amsar2mat = new THREE.MeshBasicMaterial( {color: 0x005400} );
            const amsar2 = new THREE.Mesh(amsar2geo, biematerial);
            
            amsar2.position.z = undur+0.95;
            grouphalsaw.add(amsar2);


              return grouphalsaw;
            }

            
               document.onkeydown = function(evt)
            {
                //alert(evt.keyCode);
                switch(evt.keyCode)
                {
                    case 65: alpx-=0.05; break;
                    case 68: alpx+=0.05; break;
                    case 87: alpy+=0.05; break;
                    case 83: alpy-=0.05; break;
                    case 81: alpz-=0.05; break;
                    case 69: alpz+=0.05; break;
                }
            }


            



            
//ene zai n Code heseg n shvvv 
// shiree
var a1 = shiree(10,1);
a1.position.set(0,0,0);
scene.add(a1);
 
var b1 = sandal(3,5);
b1.position.set(0,15,3);
scene.add(b1);
var b2 = sandal(3,5);
b2.position.set(15,0,3);
scene.add(b2);
var b3 = sandal(3,5);
b3.position.set(0,-15,3);
scene.add(b3);
var b4 = sandal(3,5);
b4.position.set(-15,0,3);
scene.add(b4);
var b5 = sandal(3,5);
b5.position.set(11,11,3);
scene.add(b5);
var b6 = sandal(3,5);
b6.position.set(-11,-11,3);
scene.add(b6);
var b7 = sandal(3,5);
b7.position.set(-11,11,3);
scene.add(b7);
var b8 = sandal(3,5);
b8.position.set(11,-11,3);
scene.add(b8);


var ayga1 = ayga(1,2);
            ayga1.rotation.z=Math.PI;
            ayga1.position.set(5,5,10.6);
            scene.add(ayga1);
            var ayga2 = ayga(1,2);
            ayga2.position.set(-5,-5,10.6);
            scene.add(ayga2);
            var ayga3 = ayga(1,2);
            ayga3.position.set(-5,5,10.6);
            scene.add(ayga3);
            var ayga4 = ayga(1,2);
            ayga4.rotation.z=Math.PI;
            ayga4.position.set(5,-5,10.6);
            scene.add(ayga4);
            var ayga5 = ayga(1,2);
            ayga5.rotation.z=-Math.PI/2;
            ayga5.position.set(0,7,10.6);
            scene.add(ayga5);
            var ayga6 = ayga(1,2);
            ayga6.rotation.z=Math.PI/2;
            ayga6.position.set(0,-7,10.6);
            scene.add(ayga6);
            var ayga7 = ayga(1,2);
            ayga7.rotation.z=Math.PI/2;
            ayga7.position.set(7,0,10.6);
            scene.add(ayga7);
            var ayga8= ayga(1,2);
            ayga8.rotation.z=Math.PI/2;
            ayga8.position.set(-7,0,10.6);
            scene.add(ayga8);

            var togoo1 = togoo(2,1.5,2);
            togoo1.position.set(0,3,10.6);
            scene.add(togoo1);

            var saw1 = haluunsaw1(1,4)
            saw1.position.set(0,-3,10.6);
            scene.add(saw1);

            

 
 
            camera.position.z = 30;
            function animate() {
requestAnimationFrame( animate );
 
scene.rotation.x = alpx;
scene.rotation.y = alpy;
scene.rotation.z = alpz;
 
renderer.render( scene, camera );
};
 
animate();
</script>
</body>
</html>
