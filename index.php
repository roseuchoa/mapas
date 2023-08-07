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
    <div id='map1'></div>
    <script>
        
      var map = L.map(document.getElementById('map'), {
      center: [2.80639743, -60.69037402],
      zoom: 7,
      layers: []

      });
      var map1 = L.map(document.getElementById('map1'), {
      center: [2.80639743, -60.69037402],
      zoom: 7,
      layers: []

      });

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