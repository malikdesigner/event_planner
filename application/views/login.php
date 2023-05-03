<style>
  .btn-color {
    background-color: #0e1c36;
    color: #fff;

  }

  .profile-image-pic {
    height: 100px;
    width: 100px;
    object-fit: cover;
  }

  .cardbody-color {
    background-color: #ebf2fa;
  }

  a {
    text-decoration: none;
  }
</style>
<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h2 class="text-center text-dark mt-5">Login Form</h2>
      <div id="error" class='row'> </div>

      <div class="card my-5">

        <div class="card-body cardbody-color p-lg-5">

          <div class="text-center">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/007/033/146/small/profile-icon-login-head-icon-vector.jpg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3" width="200px" alt="profile">
          </div>

          <div class="mb-3">
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="email">
          </div>
          <div class="mb-3">
            <input type="password" class="form-control" id="password" placeholder="password">
          </div>
          <div class="text-center"><button onclick="login()" class="btn btn-dark px-5 mb-3 w-100">Login</button></div>
          <div id="emailHelp" class="form-text text-center mb-3 text-dark">Not
            Registered? <a href=" <?= $this->config->base_url('login/sign_up') ?>" class="text-dark fw-bold"> Create an
              Account</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<script>
  function login() {

    let email = $('#email').val();
    let password = $('#password').val();
    console.log(email);
    console.log(password);
    if (email == '' || email == undefined) {
      showError('error', 'Please enter your email !!!!');

    } else if (password == '' || password == undefined) {
      showError('error', 'Please enter your password !!!!');

    } else {
      if (confirm('Are you sure you want to submit the form?')) {
        // If the user confirms, submit the form using AJAX
        $.ajax({
          url: "<?= $this->config->base_url('login/authentication') ?>",
          type: 'POST',
          data: {

            email: email,
            password: password
          },
          success: function(response) {
            res = JSON.parse(response);
            if (res.msg == 'success') {
              window.location="<?= $this->config->base_url('event/index')?>";
              // showSuccess('error','User Registered Successfully !!!')            
            } else {
              showError('error', 'User not found !!!!');

            }
          }
         
        });
      }
    }


  }
</script>