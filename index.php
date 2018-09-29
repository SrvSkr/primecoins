<?php include 'head.php'?>
<?php include 'header.php'?>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-body">
            <form method="post" action="">
            <input name="choice" type="radio" value="tenant">T
            <input name="choice" type="radio" value="landlord">L
                <input type="submit" value="submit"/>
            </form>
        </div>
      </div>
    </div>
  </div>
    <script>
       // $(document).ready(function(){
          //  $('#myModal').modal();
       // })
    </script>
    
<?php include 'index-content.php'?>

<?php include 'footer.php'?>