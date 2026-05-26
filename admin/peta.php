<?php

$query = mysqli_query($conn,
"SELECT * FROM laporan");

?>

<link rel="stylesheet"
href="https://unpkg.com/leaflet/dist/leaflet.css"/>

<style>
#map{
height:500px;
}
</style>

<div id="map"></div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>

var map = L.map('map').setView([-6.7320,108.5523],13);

L.tileLayer(
'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'
).addTo(map);

<?php while($data = mysqli_fetch_array($query)){ ?>

L.marker([
<?php echo $data['latitude']; ?>,
<?php echo $data['longitude']; ?>
])
.addTo(map)
.bindPopup(`
<img src="../uploads/<?php echo $data['foto']; ?>"
width="100">
<br>
<?php echo $data['status']; ?>
`);

<?php } ?>

</script>
