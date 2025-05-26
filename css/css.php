<?php include($_SERVER['DOCUMENT_ROOT'] . '/config/MetaSetting.php'); ?>
<link rel="Shortcut Icon" type="image/x-icon" href="<?php echo $http_host ?>/img/icon/icon.png">
<link rel="stylesheet" href="<?php echo $http_host ?>/css/combine.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/chiron-hei-hk-webfont@2.5.17/css/vf.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100..900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
<link rel="Shortcut Icon" type="image/x-icon" href="<?php echo $http_host ?>/img/icon.ico">
<link rel="stylesheet" href="<?php echo $http_host ?>/css/main.css?<?php echo date("His") ?>">

<style type="text/css">
  #header {
	position: fixed;
	top: 0;
	left: 0;
	width: 20%;
	height: 100vh;
	background-color: #fff;
	border-right: 1px solid #ccc;
	display: flex;
	flex-direction: column;
	align-items: center;
	padding-top: 2rem;
	z-index: 1000;
}
#logo {
	width: 150px;
	height: auto;
	margin-bottom: 2rem;
}
#MainMenu {
	display: flex;
	flex-direction: column;
	width: 100%;
	align-items: center;
}

#MainMenu .nav-item {
	width: 100%;
	text-align: center;
	margin: 0.5rem 0;
}

#MainMenu .nav-link {
	font-weight: bold;
	color: #333;
}
.main-content {
	margin-left: 20%;
	width: 80%;
	padding: 2rem;
}





  #header.scrolled {
    max-width: 100%;
    margin: 0;
    border-radius: 0;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.7);
    background-color: var(--BLUE);
  }

  .btn-light {
    background-color: transparent;
    border-color: transparent;
  }



  .caption {
    color: var(--GREY_2);
    font-weight: bold;
  }

  .overlay-container {
    position: relative;
  }

  .overlay-text-1 {
    position: absolute;
    top: 40%;
    left: 8%;
    color: white;
    width: auto;
    text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);

  }

  .overlay-text-1 h2 {
    margin: 0;
    font-size: calc(1.4rem + 1.8vw);
    font-weight: bold;
    white-space: nowrap;
  }

  /* 懸浮 */
  .floating-buttons img {
    width: 50px;
    height: 50px;
    cursor: pointer;
    transition: transform 0.2s ease;
  }

  .floating-buttons img:hover {
    transform: scale(1.1);
  }

  #topButtonContainer {
    visibility: hidden;
    opacity: 0;
    transition: opacity 0.3s ease, visibility 0.3s ease;
  }

  #topButtonContainer.show {
    visibility: visible;
    opacity: 1;
  }

  #consultationWindow {
    display: none;
    position: fixed;
    background-color: white;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    border: 1px solid var(--GREY);
    border-radius: 8px;
    width: 90%;
    max-width: 300px;
    padding: 15px;
    z-index: 1000;
    bottom: 20px;
    right: 70px;
  }

  /* @media (max-width: 768px) {
    #consultationWindow {
    display: none;
    position: fixed;
    border: 1px solid var(--GREY);
    width: 90%;
    max-width: 300px;
    z-index: 1000;
    bottom: 135px;
    left: 5rem;
  }
    } */
  /* @media (max-width: 1024px) {
      #consultationWindow {
    display: none;
    position: fixed;
    border: 1px solid var(--GREY);
    width: 90%;
    max-width: 300px;
    z-index: 1000;
    bottom: 25px;
    left: 40rem;
}} */
  /* 滾動 */
  .scroll-reveal,
  .scroll-reveal-left,
  .scroll-reveal-right {
    opacity: 0;
    transition: opacity 1s ease-out, transform 1s ease-out;
  }

  .scroll-reveal {
    transform: translateY(80px);
  }

  .scroll-reveal.visible {
    opacity: 1;
    transform: translateY(0);
  }

  .scroll-reveal-left {
    transform: translateX(-80px);
  }

  .scroll-reveal-left.visible {
    opacity: 1;
    transform: translateX(0);
  }

  /* 分隔線 */
  .divider {
    border-bottom: 2.5px solid var(--ORANGE);
    width: 60%;
    margin: 0 auto;
  }

  .btn-5 {
    position: relative;
    display: inline-block;
    width: 130px;
    height: 40px;
    line-height: 40px;
    padding: 0;
    border: none;
    text-align: center;
    text-decoration: none;
    font-size: 0.9rem;
    color: var(--BRIGHTRED);
    background: linear-gradient(0deg, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 1) 100%);
    cursor: pointer;
    overflow: hidden;
  }

  /* 打字 */
  .typewriter .line {
    display: inline-block;
    overflow: hidden;
    white-space: nowrap;
    width: 0;
    visibility: hidden;
  }

  .typewriter .line.typing {
    visibility: visible;
    animation: typing 1s steps(30, end) forwards;
  }

  @keyframes typing {
    from {
      width: 0;
    }

    to {
      width: 100%;
    }
  }

  .btn-5:hover {
    color: #FFF;
    background: transparent;
    box-shadow: none;
    text-decoration: none;
  }

  .btn-5:before,
  .btn-5:after {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    height: 2px;
    width: 0;
    background: #FFF;
    box-shadow:
      -1px -1px 5px 0px #fff,
      7px 7px 20px 0px #0003,
      4px 4px 5px 0px #0002;
    transition: 400ms ease all;
  }

  .btn-5:after {
    right: inherit;
    top: inherit;
    left: 0;
    bottom: 0;
  }

  .btn-5:hover:before,
  .btn-5:hover:after {
    width: 100%;
    transition: 800ms ease all;
  }

  .btn-6 {
    position: relative;
    display: inline-block;
    width: 130px;
    height: 40px;
    line-height: 40px;
    padding: 0;
    border: none;
    text-align: center;
    text-decoration: none;
    font-size: 0.9rem;
    color: #FFF;
    background: linear-gradient(0deg, rgba(190, 0, 0, 1) 0%, rgba(190, 0, 0, 1) 100%);
    cursor: pointer;
    overflow: hidden;
  }

  .btn-6:hover {
    color: var(--BRIGHTRED);
    background: transparent;
    box-shadow: none;
    text-decoration: none;
  }

  .btn-6:before,
  .btn-6:after {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    height: 2px;
    width: 0;
    background: var(--BRIGHTRED);
    box-shadow:
      -1px -1px 5px 0px #fff,
      7px 7px 20px 0px #0003,
      4px 4px 5px 0px #0002;
    transition: 400ms ease all;
  }

  .btn-6:after {
    right: inherit;
    top: inherit;
    left: 0;
    bottom: 0;
  }

  .btn-6:hover:before,
  .btn-6:hover:after {
    width: 100%;
    transition: 800ms ease all;
  }
</style>
