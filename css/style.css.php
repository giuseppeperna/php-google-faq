*{
    margin:0;
    padding:0;
    box-sizing: border-box;
}

body {
    font-size: 15px;
    font-family: 'Roboto', sans-serif;
}

.navbar-top {
    width: 100%;
    border-bottom: 1px solid lightgrey;
    position: fixed;
    z-index: 1;
    top:0;
    background-color: white;
    padding-bottom: 10px;
}

.navbar-top ul li {
    display: inline;
    margin: 15px;
    padding: 10px 0;
    cursor: pointer;
    color: #5f6368;
    font-weight: 500;
}

.navbar-top ul :last-child {
    border-bottom: 2px solid #1a73e8;
    color: #1a73e8;
}

.log-in {
    display:flex;
    justify-content: space-between;
    align-items:center;
    padding: 20px 0;
}

.log-in a {
    text-decoration:none;
}

.cta {
    display:flex;
    justify-content: center;
    alig-items:center;
}

.cta span {
    background-color: #1a73e8;
    color: white;
    border-none;
    border-radius: 5px;
    padding: 10px 25px;
    margin: 0 15px;
}

.cta i {
    color: #5f6368;
    font-size: 1rem;
}

.logo {
    margin: 0 15px;
    display:flex;
    justify-content: center;
    align-items:center;
}

.logo img {
    width:80px;
    margin-right: 5px;
}

.logo span {
    font-size: 1.4rem;
    color:#5f6368;
    font-weight: 400;
}

.faq {
    width: 80%;
    max-width: 1000px;
    margin: auto;
    padding-top: 150px;
}

.faq a {
    color:#1a73e8;
    text-decoration: none;
}

.faq h1 {
    font-size: 1.5rem;
    color: #3c4043;
    margin: 20px 0;
    font-weight: 500;
    letter-spacing: 1px;
    line-height: 1.5;
}

.faq p {
    font-size: 0.95rem;
    margin-bottom: 80px;
    font-weight: 300;
    letter-spacing: 1px;
    line-height: 1.5;
}

footer {
    background-color: #f5f5f5;
    padding: 15px 0;
    border-top: 1px solid #eee;
}

.navbar-bottom {
    width: 80%;
    max-width: 1000px;
    margin: auto;
    display:flex;
    justify-content: space-between;
    align-items:center;
}

.navbar-bottom ul li {
    display: inline;
    cursor: pointer;
    font-size: 0.7rem;
    font-weight: 300;
} 

.navbar-bottom a {
    color:grey;
    text-decoration:none;
}

.navbar-bottom select {
    width: 200px;
}

