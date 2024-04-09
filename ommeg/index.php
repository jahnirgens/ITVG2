<!DOCTYPE html>
<html>
<head>
<style>
.item1 { grid-area: header; }
.item2 { grid-area: menu; }
.item3 { grid-area: main; }
.item4 { grid-area: right; }
.item5 { grid-area: footer; }

.grid-container {
  display: grid;
  grid-template-areas:
    'header header header header header header'
    'menu main main main right right'
    'menu footer footer footer footer footer';
  gap: 0px;
  background-color: #2196F3;
  padding: 0px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 0px 0;
  font-size: 20px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  /*position: fixed;*/
  top: 0;
  width: 100%;  
}
li {
  float: left;
  border-right: 1px solid #bbb;
}
li:last-child {
  border-right: none;
}
a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
a.active {
  background-color: #04AA6D;
}

body{
  margin: 0;
  padding: 0;
}
</style>
</head>
<body>

<div class="grid-container">
  <div class="item1"><?php include '/topmenu.php';?></div>
  <div class="item2"><?php include 'side_menu.php';?></div>
  <div class="item3"><?php include 'hoved.php';?></div>  
  <div class="item4"><?php include '/reklame.php';?></div>
  <div class="item5"><?php include '/footer.php';?></div>
</div>

</body>
</html>