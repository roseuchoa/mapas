<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./leaflet/leaflet.css">
    <script src="./leaflet/leaflet.js"></script>
 <style>
      #map{
          height: 700px;
          width: 700px;
          border: solid 1px black;
      }
      #map1{
          height: 700px;
          width: 700px;
          border: solid 1px black;
      }
</style>

</head>
<body>
    <div id='map'>i</div>
    <!--<div id='map1'></div>--> 
    <script>
      
      var novaArray = ["São joão", "Mecejana","Centro", "São Bento"];
      var nova = [ "zona 01", "Zona 02","Zona 03", "Zona 4"];


      //var earthquakeMarker = L.marker([1.22350399, -60.38507252]);

      var map = L.map(document.getElementById('map'), {
      center: [2.80639743, -60.69037402],
      zoom: 7,
      layers: []

      
      });
      var marcador = L.marker([1.22350399, -60.38507252]); 
      marcador.bindPopup("<b> nome do bairro: </b>"+ novaArray[0] + " <br/> <b> tipo: </b>" + nova[0]);

      marcador.addTo(map);

      var m1 = L.marker([1.47440327, -60.88449575]);
      m1.bindPopup("<b> nome do bairro: </b>"+ novaArray[1] + " <br/> <b> tipo: </b>" + nova[1]);
      m1.addTo(map);

      var m2 = L.marker([1.71470000, -60.86780000]);
      m2.bindPopup("<b> nome do bairro: </b>"+ novaArray[2] + " <br/> <b> tipo: </b>" + nova[2]);
      m2.addTo(map);

      var m3 = L.marker([3.53990000, -59.88920000]);
      m3.bindPopup("<b> nome do bairro: </b>"+ novaArray[3] + " <br/> <b> tipo: </b>" + nova[3]);
      m3.addTo(map);







      /*var map1 = L.map(document.getElementById('map1'), {
      center: [2.80639743, -60.69037402],
      zoom: 7,
      layers: []

      });*/

      var basemap = L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
          });
          basemap.addTo(map);

      //basemap.addTo(map);
      //map.addLayer(basemap)

        let  googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']

});
googleSat.addTo(map1);

let googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
});
//googleTerrain.addTo(map);

</script>
</body>
</html>