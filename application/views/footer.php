

</body>
<script>
    function showError(id,error){
      $("html, body").animate({ scrollTop: 0 }, "fast");

        var myDiv = document.getElementById(id);
      myDiv.style.display = 'block';
      myDiv.innerHTML='<div class="col-md-12 bg-danger" style="text-align: center;padding: 10px;">'+error+' </div>'
      setTimeout(function() {
        myDiv.style.display = 'none';
      }, 5000);    
    }
    function showSuccess(id,msg){
      $("html, body").animate({ scrollTop: 0 }, "fast");

        var myDiv = document.getElementById(id);
      myDiv.style.display = 'block';
      myDiv.innerHTML='<div class="col-md-12 bg-success" style="text-align: center;padding: 10px;">'+msg+' </div>'
      setTimeout(function() {
        myDiv.style.display = 'none';
        location.reload();
      }, 5000);    
    }

    
</script>
</html>