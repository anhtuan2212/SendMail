<footer>
    <style>
        #container {
            width: 100%;
            height: 330px;
        }

        #part1 {
            width: 100%;
            height: 280px;
            background-color: #292929;
        }

        #part2 {
            width: 100%;
            height: 50px;
            background-color: black;
            position: relative;
            top: -15px;
        }

        #companyinfo {
            width: 14%;
            height: 280px;
            position: relative;
            left: 8%;
            top: 30px;
        }

        #sitelink {
            font-size: 35px;
            color: #f44336;
        }

        #sitelink:hover {
            color: #e65100;
        }

        #title {
            color: gray;
            position: relative;
            top: 0px;
            font-size: 14.1px;
        }

        #detail {
            color: #aaa7a7;
            font-size: 16px;
        }

        #explore {
            width: 14%;
            height: 280px;
            position: relative;
            top: -235px;
            left: 29%;
        }

        #txt1,
        #txt2,
        #txt3,
        #txt4,
        #txt5 {
            color: white;
            font-size: 20px;
        }

        .link {
            display: flex;
            width: 90px;
            height: 40px;
            color: #aaa7a7;
            background-color: transparent;
            border-top: 2px solid white;
            position: relative;
            top: -10px;
        }

        .link:hover,
        .link1:hover {
            color: #e65100;
        }

        #visit {
            width: 14%;
            height: 280px;
            position: relative;
            top: -515px;
            left: 42%;
        }

        .text {
            color: #aaa7a7;
            font-size: 14px;
            margin-top: -10px;
        }

        #legal {
            width: 14%;
            height: 280px;
            position: relative;
            top: -800px;
            left: 59.5%;
        }

        .link1 {
            display: flex;
            width: 150px;
            height: 40px;
            color: #aaa7a7;
            background-color: transparent;
            border-top: 2px solid white;
            position: relative;
            top: -10px;
            margin-top: 7px;
        }

        #subscribe {
            position: relative;
            top: -1080px;
            left: 78%;
            width: 14%;
            height: 280px;
        }

        #email {
            color: white;
            position: relative;
            top: -20px;
        }

        .btn {
            position: relative;
            top: -10px;
        }

        #txt5 {
            position: relative;
            top: 0px;
        }

        .social {
            position: relative;
            top: -5px;
            margin-right: 10px;
            color: white;
            cursor: pointer;
        }

        .fa-facebook-square:hover {
            color: #3B579D;
        }

        .fa-linkedin:hover {
            color: #007BB6;
        }

        .fa-twitter-square:hover {
            color: #2CAAE1;
        }

        #txt6 {
            color: white;
            position: relative;
            top: 13px;
            left: 8%;
            width: 80%;
            color: #aaa7a7;
        }

        .material-icons {
            position: relative;
            top: 3px;
        }

        @media only screen and (max-width:1000px) {
            #companyinfo {
                width: 20%;
            }

            #sitelink {
                font-size: 30px;
            }

            #txt5,
            #txt4 {
                font-size: 17px;
            }

            #txt5,
            .social {
                position: relative;
                top: -5px;
            }
        }

        @media only screen and (max-width:850px) {
            #companyinfo {
                position: relative;
                left: 3%;
            }

            #txt6 {
                position: relative;
                left: 3%;
            }

            #txt1,
            #txt2,
            #txt3,
            #txt4,
            #txt5 {
                font-size: 15px;
            }

            #explore {
                position: relative;
                top: -240px;
                left: 26%;
            }

            #sitelink {
                font-size: 25px;
            }

            #detail {
                font-size: 13px;
            }

            .link {
                width: 60px;
            }

            #visit {
                position: relative;
                top: -520px;
                left: 37%;
            }

            .text {
                font-size: 13px;
            }

            #legal {
                position: relative;
                top: -800px;
                left: 54%;
            }

            #subscribe {
                position: relative;
                top: -1080px;
                left: 76%;
                width: 20%;
            }

            #txt5,
            .social {
                position: relative;
                left: -110%;
                top: px;
            }

            #email,
            .btn {
                position: relative;
                top: 0px;
            }

            #part1 {
                height: 250px;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <body>
        <div id="container">
            <div id="part1">
                <div id="companyinfo">
                    <a id="sitelink" href="#">BBbootstrap</a>
                    <p id="title">Cool and Perfect Snippet code</p>
                    <p id="detail">We create awesome code snippets that will help you in creating your own beautiful
                        site. </p>
                </div>
                <div id="explore">
                    <p id="txt1">Explore</p>
                    <a class="link" href="#">Home</a>
                    <a class="link" href="#">About</a>
                    <a class="link" href="#">Snippet</a>
                    <a class="link" href="#">Careers</a>
                </div>
                <div id="visit">
                    <p id="txt2">Visit</p>
                    <p class="text">Lincoln House </p>
                    <p class="text">78 Bhulabhai Desai Road </p>
                    <p class="text">Mumbai 400 026 </p>
                    <p class="text">Phone: (22) 2363-3611 </p>
                    <p class="text">Fax: (22) 2363-0350 </p>
                </div>
                <div id="legal">
                    <p id="txt3">Legal</p>
                    <a class="link1" href="#">Terms and Conditions</a>
                    <a class="link1" href="#">Private Policy</a>
                </div>
                <div id="subscribe">
                    <p id="txt4">Subscribe to US</p>
                    <form>
                        <input id="email" type="email" placeholder="Email">
                    </form>
                    <a class="waves-effect waves-light btn">Subscribe</a>
                    <p id="txt5">Connect With US</p>
                    <i class="fab fa-facebook-square social fa-2x"></i>
                    <i class="fab fa-linkedin social fa-2x"></i>
                    <i class="fab fa-twitter-square social fa-2x"></i>
                </div>
            </div>
            <div id="part2">
                <p id="txt6"><i class="material-icons tiny"> copyright</i>copyright 2019 BBbootstrap - All right
                    reserved</p>
            </div>
        </div>
    </body>
</footer>
