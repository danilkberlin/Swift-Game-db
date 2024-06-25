<style>
    :root{
        --btn-color: #8A2BE2;
        --color: #fff;
        --fill-color: #fff;
        --btn-color-hover: #9400D3;
        --nav-border-color: #fff;
    }

    body{
        background: #1b1b1b;
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
    .signup{
        padding: 150px 0;
    }

    .carousel{
        background: #fff;
    }

    .home{
        background: linear-gradient(158deg, rgba(27,27,27,1) 80%, rgba(255,255,255,1) 80%);
    }

    .about{
        background: linear-gradient(158deg, rgba(27,27,27,1) 27.6%, rgba(255,255,255,1) 27.6%);
    }

    .contact{
        background: linear-gradient(158deg, rgba(255,255,255,1) 45%, rgba(27,27,27,1) 45%);
    }
</style>