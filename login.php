<!DOCTYPE html>
<html>
<head>
	<title></title>

  <style type="text/css">

body {
  font-family: "Open Sans", sans-serif;
  height: 100vh;
  background: url("https://i.imgur.com/HgflTDf.jpg") 50% fixed;
  background-size: cover;
}

@keyframes spinner {
  0% { transform: rotateZ(0deg); }
  100% { transform: rotateZ(359deg); }
}

* {
  box-sizing: border-box;
}

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column; 
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
  background: rgba(darken($primary,40%), 0.85);
}


.login {
  
  border-radius: 2px 2px 5px 5px;
  padding: 10px 20px 20px 20px;
  width: 90%;
  max-width: 320px;
  background: #ffffff;
  position: relative;
  padding-bottom: 80px;
  box-shadow: 0px 1px 5px rgba(0,0,0,0.3);
  
  
  
  &.ok {
    button {
      background-color: #8bc34a;
      .spinner{
        border-radius: 0;
        border-top-color: transparent;
        border-right-color: transparent;
        height: 20px;
        animation: none;
        transform: rotateZ(-45deg);
      }
    }
  }
  
  input {
    display: block;
    padding: 15px 10px;
    margin-bottom: 10px;
    width: 100%;
    border: 1px solid #ddd;
    transition: border-width 0.2s ease;
    border-radius: 2px;
    color: #ccc;
    
    &+ i.fa {
        color: #fff;
      font-size: 1em;
      position: absolute;
      margin-top: -47px;
      opacity: 0;
      left: 0;
      transition: all 0.1s ease-in;
    }
    
    &:focus {
      &+ i.fa {
        opacity: 1;
        left: 30px;
      transition: all 0.25s ease-out;
      }
      outline: none;
      color: #444;
      border-color: $primary;
      border-left-width: 35px;
    }
    
  }
  
  a {
   font-size: 0.8em;   
    color: $primary;
    text-decoration: none;
  }
  
  .title {
    color: #444;
    font-size: 1.2em;
    font-weight: bold;
    margin: 10px 0 30px 0;
    border-bottom: 1px solid #eee;
    padding-bottom: 20px;
  }
  
  button {
    width: 100%;
    height: 100%;
    padding: 10px 10px;
    background: $primary;
    color: #fff;
    display: block;
    border: none;
    margin-top: 20px;
    position: absolute;
    left: 0;
    bottom: 0;
    max-height: 60px;
    border: 0px solid rgba(0,0,0,0.1);
  border-radius: 0 0 2px 2px;
    transform: rotateZ(0deg);
    
    transition: all 0.1s ease-out;
      border-bottom-width: 7px;
    
    
  
    &:not(.loading) button:hover {
      box-shadow: 0px 1px 3px $primary;
    }
    &:not(.loading) button:focus {
      border-bottom-width: 4px;
    }
  
}

footer {
  display: block;
  padding-top: 50px;
  text-align: center;
  color: #ddd;
  font-weight: normal;
  text-shadow: 0px -1px 0px rgba(0,0,0,0.2);
  font-size: 0.8em;
  a, a:link {
    color: #fff;
    text-decoration: none;
  }
}
  </style>
</head>
<body>
<div class="wrapper" style="text-align:center">
  <form class="login" style="background-color:lightblue">
    <p class="title" style="text-align:center">Log in</p>
    <input type="text" placeholder="Username" autofocus/>
    <i class="fa fa-user"></i><br><br>
    <input type="password" placeholder="Password" />
    <i class="fa fa-key"></i><br><br>
    <a href="#">Forgot your password?</a><br><br>
    <button>
      <i class="spinner"></i>
      <span class="state">Log in</span>
    </button>
  </form>
  </p>
</div>
</body>
</html>