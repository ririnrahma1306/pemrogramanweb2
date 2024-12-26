<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Buku Online</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
      }
      .content-wrapper {
        display: flex;
        flex: 1;
      }
      .sidebar {
        width: 250px;
        background-color: #e0e0e0;
        padding: 20px;
        border-right: 1px solid #ddd;
        position: fixed;
        height: 100%;
        left: -250px;
        transition: all 0.3s ease;
      }
      .sidebar.active {
        left: 0;
      }
      .main-content {
        flex: 1;
        margin-left: 0;
        padding: 20px;
        transition: margin-left 0.3s ease;
      }
      .main-content.shifted {
        margin-left: 250px;
      }
      .toggle-btn {
        position: fixed;
        left: 10px;
        top: 15px;
        background-color: #6c757d;
        color: white;
        border: none;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        z-index: 1000;
      }
      .navbar-brand {
        font-size: 1.5rem;
        font-weight: bold;
      }
    </style>
  </head>
  <body>

  <nav class="navbar bg-body-tertiary bg-light mb-3">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
  <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
</svg>
        <span class="ms-2">Toko Buku Online</span>
      </a>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Cari Data Pelanggan" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Cari</button>
      </form>
    </div>
  </nav>

  <button class="toggle-btn" id="toggleSidebar">
    ☰
  </button>

  <div class="content-wrapper">
    <div class="sidebar" id="sidebar">
      <h5 class="mb-3">Menu</h5>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="data-buku">Data Buku</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="transaksi">Transaksi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pelanggan">Pelanggan</a>
        </li>
      </ul>
    </div>

    <div class="main-content" id="mainContent">
      <?= $this->renderSection('mainadmin');?>
    </div>
  </div>

  <footer class="p-5 bg-info mt-auto text-center">
    &copy; 2024. Kelas A Pemrograman Web2. All Rights Reserved
  </footer>

  <script>
    const toggleBtn = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('mainContent');

    toggleBtn.addEventListener('click', () => {
      sidebar.classList.toggle('active');
      mainContent.classList.toggle('shifted');
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>