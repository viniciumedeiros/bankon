<h1 align="center">
    <img alt="" title="BankON" src=".github/logo.svg" width="220px" />
</h1>

<h4 align="center">
    Bank with us wherever you are
</h4>

<p align="center">
  <img alt="GitHub language count" src="https://img.shields.io/github/languages/count/viniciumedeiros/bank">

  <img alt="Repository size" src="https://img.shields.io/github/repo-size/viniciumedeiros/bankon">
	
  <a href="https://www.linkedin.com/in/viniciumedeiros/">
    <img alt="Made by Vinícius Medeiros" src="https://img.shields.io/badge/made%20by-viniciumedeiros-%2304D361">
  </a>
  
  <a href="https://github.com/viniciumedeiros/bankon/commits/master">
    <img alt="GitHub last commit" src="https://img.shields.io/github/last-commit/viniciumedeiros/bankon">
  </a>

  <img alt="License" src="https://img.shields.io/badge/license-MIT-brightgreen">
   <a href="https://github.com/viniciumedeiros/bankon/stargazers">
    <img alt="Stargazers" src="https://img.shields.io/github/stars/viniciumedeiros/bankon?style=social">
  </a>
</p>
<p align="center">
  <a href="#-project">Project</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-technologies">Technologies</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-how-to-use">How to use</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-how-to-contribute">How to contribute</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-license">License</a>
</p>

## 💻 Project

Transform your digital banking into a differential and customized user experience.<br> 
We believe your money should always be at your fingertips. BankON lets you do your banking online seamlessly, whether using your computer or mobile device.<br>
Bank your way smart solutions that fit your life.

<h1 align="center">
    <img alt="Example" title="Example" src=".github/capa.jpg" width="100%" />
</h1>


## 🚀 Technologies

This project was developed with the following technologies:

- [PHP][php]
- [Laravel][laravel]
- [Bootstrap][bootstrap]

## 🌍 How To Use

To clone and run this application, you'll need [Git](https://git-scm.com), [PHP 7][php] + [Composer][composer] installed on your computer.

From your command line:

### Install BankON 

```bash
# Clone this repository
$ git clone https://github.com/viniciumedeiros/bankon

# Go into the repository
$ cd bankon/

# Install dependencies
$ composer install

# Start server
$ php artisan serve

# running on port 8000
http://127.0.0.1:8000/
```

### Database Configuration

```bash
# Open the .env file and set your database credentials
DB_DATABASE=bank
DB_USERNAME=root
DB_PASSWORD=

# Run Migrates
$ php artisan migrate

# Run Seeds
$ php artisan db:seed
```

## 👽 How to contribute

-  Make a fork;
-  Create a branck with your feature: `git checkout -b my-feature`;
-  Commit changes: `git commit -m 'feat: My new feature'`;
-  Make a push to your branch: `git push origin my-feature`.

After merging your receipt request to done, you can delete a branch from yours.

## 📃 License

This project is under the MIT license. See the [LICENSE](https://github.com/viniciumedeiros/bankon/blob/master/LICENSE) for details.

🎓 Made with by Vinícius Medeiros 👨🏻‍💻 [Get in touch!](https://www.linkedin.com/in/viniciumedeiros/)

[php]: https://www.php.net/
[laravel]: https://laravel.com/
[bootstrap]: https://getbootstrap.com/
[composer]: https://getcomposer.org/
