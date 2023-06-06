<html>  
  
<head>  
    <title>Bootstrap </title>  
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>  
</head>  
  
<body>  
    <div class="container" > 
        <div class="row justify-content-center my-5" >
            <div class="col-4"></div> 
            <div class="col" style="background-color: grey;" >
        <h2>Login form</h2>  
        <form method="post" action="save.php">  

            <div class="form-group">
                <label class="form-label">UserName:</label>
                <input type="text" class="form-control" name="sname" placeholder="Enter your name or email" required>
                
            </div><br>
            
            <div class="form-group">
                <label class="form-label">password:</label>
                <input type="password" class="form-control" name="pwd" placeholder="Enter strong password" >
                
            </div><br>

            
            <div class="form-group">
         <input type="submit" class="btn btn-primary" name="submit" value="submit">
         <input type="reset" class="btn btn-danger" name="reset" value="reset" >

           
		     </div>
        </form>  
            </div>
            <div class="col-4"></div>
    </div>  
</div>
</body>  
  
</html>  