<style>

    :root{
        --btn-color: #8A2BE2;
        --color: #fff;
        --fill-color: #fff;
        --btn-color-hover: #9400D3;
        --nav-border-color: #fff;
        /* default background color */
        --background-color-1: #1b1b1b;
        --background-color-2: #fff;
        /* title gradient */
        -title-gradient-1: rgba(138,43,226,1);
        -title-gradient-2: rgba(255,255,255,1);
    }

    body{
        background: #1b1b1b;
        /* background: #fff; */
    }



    /* Default text  */
    .title-text-gradient{
        font-size: 64px ;
        background: linear-gradient(90deg, rgba(138,43,226,1) 20%, rgba(255,255,255,1) 80%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .text-color{
        color: var(--color);
    }

    /* Default input  */

    .input-background{
        background: inherit !important;
        color: var(--color) !important;
    }
    .input-background:placeholder{
        color: var(--color);
    }

    .input-background-contact{
        background: inherit!important;
        color: var(--btn-color-hover) !important;
    }
    .input-background-contact:placeholder{
        color:  var(--btn-color-hover) !important;
    }
    /* Default navbar  */
    .nav-list-item a{
        color: var(--color); 
    }

    .nav-list-item:hover{
        border: 1px solid var(--nav-border-color);
    }
    .nav-list-item a:hover{
        color: var(--color);
        fill: var(--color);
    }
    /* Default button  */  

    .btn-violet{
        background: var(--btn-color);
        color : var(--color);
        fill : var(--fill-color);
    }

    .btn-violet:hover{
        background: var(--btn-color-hover);
        color : var(--color);
        fill : var(--fill-color);
    }

    .btn-violet-outline{
        border: 1px solid var(--btn-color);
        color : var(--btn-color);
    }

    .btn-violet-outline:hover{
        border: 1px solid var(--btn-color);
        background:  var(--btn-color);
        color : var(--color);
    }

    .btn-dark-white{
        background: linear-gradient(90deg, #1b1b1b 50%, #fff 50%);
    }
    .btn-dark-red{
        background: linear-gradient(90deg, #1b1b1b 50%, #ff0000 50%);
    }
    .btn-dark-green{
        background: linear-gradient(90deg, #1b1b1b 50%, #00ff00 50%);
    }
    .btn-dark-blue{
        background: linear-gradient(90deg, #1b1b1b 50%, #0000ff 50%);
    }
    .btn-dark-violet{
        background: linear-gradient(90deg, #1b1b1b 50%, #8A2BE2 50%);
    }

    .btn-dark-yellow{
        background: linear-gradient(90deg, #1b1b1b 50%, #ffff00 50%);
    }
    .btn-white-red{
        background: linear-gradient(90deg, #fff 50%, #ff0000 50%);
    }
    .btn-white-green{
        background: linear-gradient(90deg, #fff 50%, #00ff00 50%);
    }
    .btn-white-blue{
        background: linear-gradient(90deg, #fff 50%, #0000ff 50%);
    }
    .btn-white-violet{
        background: linear-gradient(90deg, #fff 50%, #8A2BE2 50%);
    }

    .btn-white-yellow{
        background: linear-gradient(90deg, #fff 50%, #ffff00 50%);
    }
    /* Default carousel  */

    .carousel-indicators img {
        border: 2px solid #fff;
        margin: 0 5px;
        opacity: 0.7;
        transition: opacity 0.3s, transform 0.3s;
    }
    .carousel-indicators img:hover,
    .carousel-indicators img.active {
        opacity: 1;
        transform: scale(1.1);
    }
    .carousel-caption {
        background: rgba(0, 0, 0, 0.5);
        border-radius: 10px;
        padding: 10px;
    }
    .carousel-item img {
        height: 1000px; 
        object-fit: cover; 
    }

    /* Default slide  */
    .signup, .error{
        padding: 150px 0;
    }

    .carousel{
        background: var(--background-color-2);
    }

    .home{
        background: linear-gradient(158deg, var(--background-color-1) 80%, var(--background-color-2) 80%);
    }

    .about{
        background: linear-gradient(158deg, var(--background-color-1) 27.6%, var(--background-color-2) 27.6%);
    }

    .contact{
        background: linear-gradient(158deg, var(--background-color-2) 45%, var(--background-color-1) 45%);
    }
    /* black && white || black && red || black && green || black && yellow || black && oramge  || white && red || white && green || white && yellow || white && oramge || white && violete || violete && black || */
</style>

