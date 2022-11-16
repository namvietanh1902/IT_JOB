const mainContent = document.querySelector(".main-content");
const container = document.createElement("div");

container.classList.add("container");
container.innerHTML = `
<div class="container-search">
<h4 class="search-title">1,552 Việc Làm IT Cho Developer "Chất"</h4>
<div class="tool-search">
  <div class="search-input">
    <i class="search-icon fa-solid fa-magnifying-glass"></i>
    <input
      class="input-text"
      type="text"
      placeholder="Tìm kiếm theo kỹ năng chức vụ của công type"
    />
  </div>
  <div class="search-locate">
    <i class="locate-icon fa-solid fa-location-dot"></i>
    <select name="" class="locate-name">
      <option value="">Da Nang</option>
      <option value="">Quang Nam</option>
      <option value="">Ho Chi Minh</option>
      <option value="">Ha Noi</option>
    </select>
    <!-- <span class="locate-name">Da Nang</span>
    <i class="locate-select fa-solid fa-chevron-down"></i> -->
  </div>
  <a href="../SearchJob/index.html" class="btn-search">
    <input type="button" value="Tìm Kiếm" />
  </a>
</div>
<ul class="list-item">
  <li class="item">Tester</li>
  <li class="item">Java</li>
  <li class="item">PHP</li>
  <li class="item">Android</li>
  <li class="item">.NET</li>
  <li class="item">iOS</li>
  <li class="item">Business Analyst</li>
  <li class="item">QA QC</li>
</ul>
</div>

<div class="container-companies">
<h4 class="companies-title">Nhà Tuyển Dụng Hàng Đầu</h4>
<div class="list-company">
  <a class="company" href="../Company/index.html?id=2">
    <img
      class="company-logo"
      src="views/IT_JOB/img/logo FSOFT dọc.webp"
      alt=""
    />
    <h5 class="company-name">FBT Software</h5>
    <div class="company-footer">
      <span class="company-jobs">5 Việc Làm</span>
      <span class="company-city">Da Nang</span>
    </div>
  </a>
  <a class="company" href="../Company/index.html?id=2">
    <img
      class="company-logo"
      src="views/IT_JOB/img/logo FSOFT dọc.webp"
      alt=""
    />
    <h5 class="company-name">FBT Software</h5>
    <div class="company-footer">
      <span class="company-jobs">5 Việc Làm</span>
      <span class="company-city">Da Nang</span>
    </div>
  </a>
  <a class="company" href="../Company/index.html?id=2">
    <img
      class="company-logo"
      src="views/IT_JOB/img/logo FSOFT dọc.webp"
      alt=""
    />
    <h5 class="company-name">FBT Software</h5>
    <div class="company-footer">
      <span class="company-jobs">5 Việc Làm</span>
      <span class="company-city">Da Nang</span>
    </div>
  </a>
  <a class="company" href="../Company/index.html?id=2">
    <img
      class="company-logo"
      src="views/IT_JOB/img/logo FSOFT dọc.webp"
      alt=""
    />
    <h5 class="company-name">FBT Software</h5>
    <div class="company-footer">
      <span class="company-jobs">5 Việc Làm</span>
      <span class="company-city">Da Nang</span>
    </div>
  </a>
  <a class="company" href="../Company/index.html?id=2">
    <img
      class="company-logo"
      src="views/IT_JOB/img/logo FSOFT dọc.webp"
      alt=""
    />
    <h5 class="company-name">FBT Software</h5>
    <div class="company-footer">
      <span class="company-jobs">5 Việc Làm</span>
      <span class="company-city">Da Nang</span>
    </div>
  </a>
  <a class="company" href="../Company/index.html?id=2">
    <img
      class="company-logo"
      src="views/IT_JOB/img/logo FSOFT dọc.webp"
      alt=""
    />
    <h5 class="company-name">FBT Software</h5>
    <div class="company-footer">
      <span class="company-jobs">5 Việc Làm</span>
      <span class="company-city">Da Nang</span>
    </div>
  </a>
  <a class="company" href="../Company/index.html?id=2">
    <img
      class="company-logo"
      src="views/IT_JOB/img/logo FSOFT dọc.webp"
      alt=""
    />
    <h5 class="company-name">FBT Software</h5>
    <div class="company-footer">
      <span class="company-jobs">5 Việc Làm</span>
      <span class="company-city">Da Nang</span>
    </div>
  </a>
  <a class="company" href="../Company/index.html?id=2">
    <img
      class="company-logo"
      src="../img/logo FSOFT dọc.webp"
      alt=""
    />
    <h5 class="company-name">FBT Software</h5>
    <div class="company-footer">
      <span class="company-jobs">5 Việc Làm</span>
      <span class="company-city">Da Nang</span>
    </div>
  </a>
</div>
</div>
`;

mainContent.appendChild(container);
