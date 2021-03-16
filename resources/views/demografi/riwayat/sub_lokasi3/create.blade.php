<html lang="en">
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<br>
<div class="container">
  <div class="panel panel-default">
    <h1 class="text-center">FORM ADD</h1>
    <div class="panel-body">
      <!-- membuat form  -->
      <!-- gunakan tanda [] untuk menampung array  -->
        <form action="/lokasi/sub_lokasi3/hasil" method="POST">
        {{ csrf_field()}}
          <div class="control-group after-add-more">
            <button class="btn btn-primary add-more"style="float:right;" type="button">
              <i class="glyphicon glyphicon-plus"></i> Add
            </button>
            <br>
            <label>Table </label>
            <input type="number" name="id_lokasi[]" class="form-control" value="3">
            <label>Nilai</label>
            <input type="number" name="nilai_2[]" class="form-control" placeholder="Enter Nilai">
            <label> Keterangan</label>
            <input type="text" name="keterangan_2[]" class="form-control"placeholder="Enter Keterangan">
            <br>

            <hr>
          </div>
          <a href="/lokasi" class="btn btn-info">Close</a>
          <button class="btn btn-success" type="submit">Submit</button>
        </form>

        <!-- class hide membuat form disembunyikan  -->
        <!-- hide adalah fungsi bootstrap 3, klo bootstrap 4 pake invisible  -->
        <div class="copy hide">
            <div class="control-group">
                <label>Table </label>
                <input type="number" name="id_lokasi[]" class="form-control" value="3">
              <label>Nilai</label>
              <input type="number" name="nilai_2[]" class="form-control"placeholder="Enter Nilai">
              <label> Keterangan</label>
              <input type="text" name="keterangan_2[]" class="form-control"placeholder="Enter Keterangan">
              <br>
              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
              <hr>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>
<!-- fungsi javascript untuk menampilkan form dinamis  -->
<!-- penjelasan :
saat tombol add-more ditekan, maka akan memunculkan div dengan class copy -->
<script type="text/javascript">
    $(document).ready(function() {
      $(".add-more").click(function(){
          var html = $(".copy").html();
          $(".after-add-more").after(html);
      });

      // saat tombol remove dklik control group akan dihapus
      $("body").on("click",".remove",function(){
          $(this).parents(".control-group").remove();
      });
    });
</script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
