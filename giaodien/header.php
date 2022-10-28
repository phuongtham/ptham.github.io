<style>
.Iam {
    padding: 2em 5em;
    font: normal 40px/50px Montserrat, sans-serif;
    color: black;
    position: absolute;
    font-size: 45px;
    left: -15%;
}

.Iam p {
    height: 10px;
    float: left;
    margin-right: 0.3em;
    position: absolute;
	margin-top: -5%;
}

.Iam b {
    float: left;
    overflow: hidden;
    position: relative;
    height: 50px;
    top: 40px;
    left: 320px;
}
.innerIam{
	width: 500px;	
    font-size: 60px;
}
.textabc{
	margin-top: 0;
	margin-left: -64%;
}

.Iam .innerIam {
	display: inline-block;
    color: #666666;
    position: relative;
    white-space: nowrap;
    top: 0;
    left: 0;
    /*animation*/
    -webkit-animation: move 5s;
    -moz-animation: move 5s;
    -ms-animation: move 5s;
    -o-animation: move 5s;
    animation: move 5s;
    /*animation-iteration-count*/
    -webkit-animation-iteration-count: infinite;
    -moz-animation-iteration-count: infinite;
    -ms-animation-iteration-count: infinite;
    -o-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
    /*animation-delay*/
    -webkit-animation-delay: 1s;
    -moz-animation-delay: 1s;
    -ms-animation-delay: 1s;
    -o-animation-delay: 1s;
    animation-delay: 1s;
}

@keyframes move {
    0% {
        top: 0px;
    }
    18% {
        top: -50px;
    }
    36% {
        top: -100px;
    }
    54% {
        top: -150px;
    }
    72% {
        top: -200px;
    }
	88%{
		top: -250px;
	}
	100%{
		top: -300px;
	}
}

</style>
<header id="header">
		<div class="textheader">
            <div class="Iam">
                <p>VISTA Clothing</p>
                <b class="textabc">
                    <div class="innerIam">
                        TEE<br/> 
                        HOODIE<br/>
                        SWEATERSHIRT<br/>
                        T-SHIRT<br/>
						VARSITY<br/>
						JACKET<br/>
                        WELCOME ^^<br/>
                    </div>
                </b>
            </div>
        </div>
		<div class="row">
			<div class=" col-md-5 col-sm-0" >
				<h5 style="font-style: italic;font-weight: bold;color: #fff;"></h5>
			</div>
			<div class="Logo-Brand col-md-2 col-sm-5" >
				<img src="images/logo.png " style="width:100%">
			</div>
			<div class=" col-md-1 col-sm-0" ></div>
			<div class="Account col-md-4 col-sm-5" >
			<button class="login btn btn-outline-success" ><a style="text-decoration: none; color: green; font-weight: bold; "href=
				'<?php
						if (isset($_SESSION['login']) ) {
							if($_SESSION['login']) echo "index.php?quanly=user";
							else echo "giaodien/login.php";
							}
						else echo "giaodien/login.php";
				?>'
			>
			<?php 
				if (isset($_SESSION['login']) ) {
					if($_SESSION['login']) echo '<i class="fas fa-user-alt"></i> '.$_SESSION['customer_name'].""; 
					
					else echo "Đăng Nhập";
				}
				else echo "Đăng Nhập";

			?>	</a></button>
			<button class="btn btn-outline-danger register" ><a class="register" style="text-decoration: none; color: red;font-weight:bold;" href=
				'<?php
					if (isset($_SESSION['login']) ) {
						if($_SESSION['login']) echo "giaodien/logout.php";
						else echo "giaodien/register.php";
						}
					else echo "giaodien/register.php";
				?>'
			>
				<?php
					if (isset($_SESSION['login']) ) {
						if($_SESSION['login']) 
							echo "Đăng Xuất"; 
						  
						else echo "Đăng Ký";
					}
					else echo "Đăng Ký";

				?>
			</a> </button>
			
			</div>
			
		</div>
		
		
	</header>