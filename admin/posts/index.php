<?php 
include ("../../app/controllers/exhibits.php");
 ?>

<!doctype html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/e2d43346f2.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>редактирование</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap"
          rel="stylesheet">
</head>
<body>
<!-- header -->
<?php include("../../app/include/header-admin.php"); ?>
<div class ="container">

<?php include("../../app/include/sidebar-admin.php"); ?>
          
            <div class = "posts col-9">
                <div class="button row">
                    <a href = "create.php" class="col-4 btn btn-dark">Добавить покупку</a>
                    <span class = "col-1"></span>
                    <a href = "index.php" class="col-4 btn btn-secondary">Редактировать</a>
                </div>
                <div class = "row title-table">
                    
                    <h1>Управление покупками</h1>
                    <div class ="col-1">ID</div>
                    <div class ="col-5">Название</div>
                    <div class ="col-2">Магазин</div>
            
                    <div class ="col-4">Управление</div>
                    
                </div>
                <?php foreach ($exhibitssADM as $key => $exhibit): ?>
                <div class = "row post">
                    <div class ="id col-1"><?=$key +1;?></div>
                    <div class ="tittle col-5"><a href="<?='../../' . 'single.php?exhibit=' . $exhibit['id'];?>"><?= isset($exhibit['name']) ? (strlen($exhibit['name']) > 50 ? mb_substr($exhibit['name'], 0,20,'UTF-8') . '...' : $exhibit['name']) : '' ?></a></div>
                    <div class ="age col-2"><?=$exhibit['username'];?></div>
                    <div class ="red col-1"><a href="edit.php?id=<?=$exhibit['id'];?>">edit</a></div>
                    <div class ="del col-1"><a href="edit.php?del_id=<?=$exhibit['id'];?>">delete</a></div>
                    <?php if($exhibit['status']): ?>
                    <div class ="status col-2"><a href="edit.php?publish=0&pub_id=<?=$exhibit['id'];?>">unpublish</a></div>
                    <?php else: ?>
                        <div class ="status col-2"><a href="edit.php?publish=1&pub_id=<?=$exhibit['id'];?>">publish</a></div>
                        <?php endif; ?>
                </div>
                <?php endforeach; ?>
               
                
                </div>
            
            </div>
        </div>
        
      
<!-- footer -->
<?php include("../../app/include/footer.php"); ?>
<!-- footer -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>                                
