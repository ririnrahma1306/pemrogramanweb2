# appik

[![IMAGE ALT TEXT HERE](https://i.ytimg.com/vi/cxNEu3Z7ITw/hqdefault.jpg)](https://www.youtube.com/watch?v=cxNEu3Z7ITw)

demo => https://youtu.be/cxNEu3Z7ITw

Selama masa magang di PT PJB UBjom PLTMG Arun, saya berhasil merancang dan mengimplementasikan sebuah sistem yang sangat kompleks dan efisien untuk membuat serta mengelola dokumen Instruksi Kerja (IK) berbasis web. Sistem yang saya kembangkan ini saya namakan Appik, yang merupakan singkatan dari Aplikasi Pembuatan Instruksi Kerja. Appik didesain dengan menggunakan teknologi modern seperti CodeIgniter 4 sebagai framework PHP, Bootstrap 5 untuk tampilan responsif, dan MySQL sebagai basis data.

Appik tidak hanya menyediakan antarmuka yang intuitif dan ramah pengguna untuk membuat dan mengelola IK, tetapi juga mengintegrasikan fitur-fitur canggih seperti manajemen versi, otorisasi akses berbasis peran, pencarian cepat, serta notifikasi otomatis. Dengan sistem ini, seluruh staf di PT PJB UBjom PLTMG Arun dapat dengan mudah mengakses, memperbarui, dan berkolaborasi dalam pengembangan IK sesuai dengan kebutuhan operasional.

Keberhasilan dalam mengembangkan Appik tidak hanya menunjukkan kemampuan teknis saya dalam mengimplementasikan solusi yang kompleks, tetapi juga kemampuan analisis dan pemahaman saya terhadap proses bisnis di industri energi. Ini merupakan prestasi yang signifikan bagi saya selama masa magang saya, dan saya sangat bangga atas kontribusi saya terhadap pengembangan sistem informasi yang berdampak positif bagi perusahaan.

# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](http://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [the announcement](http://forum.codeigniter.com/thread-62615.html) on the forums.

The user guide corresponding to this version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.3 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php)
- xml (enabled by default - don't turn it off)

# BlackBox Testing

<img width="566" alt="1" src="https://github.com/codedaffa/appik/assets/154736760/dc6361f7-8e15-4a7d-b930-bfcfd5b0528f">
<img width="566" alt="2" src="https://github.com/codedaffa/appik/assets/154736760/e017b281-25bc-4aa8-bc77-b91052901bea">
<img width="566" alt="3" src="https://github.com/codedaffa/appik/assets/154736760/ff9b225a-32d6-4496-a303-e3c58ee2888b">
<img width="562" alt="4" src="https://github.com/codedaffa/appik/assets/154736760/1d248fea-a625-4c6b-bff1-703ff2c0fb27">
<img width="564" alt="5" src="https://github.com/codedaffa/appik/assets/154736760/5ab446e5-ebb1-41a0-8baf-2d268f01f7b1">
<img width="569" alt="6" src="https://github.com/codedaffa/appik/assets/154736760/4983b702-ef65-4493-92db-879874035a72">
<img width="563" alt="7" src="https://github.com/codedaffa/appik/assets/154736760/a4847b7d-a691-4734-b042-7b67a764fe4e">
<img width="565" alt="8" src="https://github.com/codedaffa/appik/assets/154736760/9b0ccf10-4e32-448f-a388-327aa01da2be">
<img width="568" alt="9" src="https://github.com/codedaffa/appik/assets/154736760/7f6babea-85c1-4c43-b8bd-39ee61e63657">
<img width="563" alt="10" src="https://github.com/codedaffa/appik/assets/154736760/7cc61aad-b1ba-40fd-a517-f7fad602d0c0">
<img width="568" alt="11" src="https://github.com/codedaffa/appik/assets/154736760/a18474c4-6318-45bd-a062-df907fb107e2">
<img width="568" alt="12" src="https://github.com/codedaffa/appik/assets/154736760/d3cdf24f-4ddf-4806-a04c-d9be51035ca7">
<img width="569" alt="13" src="https://github.com/codedaffa/appik/assets/154736760/cbf6e533-8200-4c45-a419-5fc9da35ae23">
<img width="566" alt="14" src="https://github.com/codedaffa/appik/assets/154736760/d0c6654e-5dbf-4483-9459-06ed21ccf49c">
<img width="569" alt="15" src="https://github.com/codedaffa/appik/assets/154736760/44066eb5-a6f8-46c3-9ee5-89e234c0a83d">
<img width="569" alt="16" src="https://github.com/codedaffa/appik/assets/154736760/ed927c05-470a-4505-bd36-3cc6499a5772">
<img width="568" alt="17" src="https://github.com/codedaffa/appik/assets/154736760/51e1264f-c131-4c1e-9142-6dafe7080470">
<img width="566" alt="18" src="https://github.com/codedaffa/appik/assets/154736760/630c54a4-a35b-4bb3-bafb-ba6fcf6f4400">
<img width="569" alt="19" src="https://github.com/codedaffa/appik/assets/154736760/1156309a-60be-4a0c-b60c-42e1a4e519c3">
