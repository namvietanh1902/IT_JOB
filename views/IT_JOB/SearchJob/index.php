<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="views/IT_JOB/SearchJob/style.css" />
    <script
      src="https://kit.fontawesome.com/a8df01a584.js"
      crossorigin="anonymous"
    ></script>
    <title>Document</title>
  </head>
  <body>
    <header>
      <div class="header">
        <nav class="header-left">
          <a href="./">
            <img
              class="header-logo"
              src="img/logo-itviec-4492a2f2577a15a0a1d55444c21c0fa55810822b3b189fc689b450fb62ce0b5b.png"
              alt="logo"
            />
          </a>

          <ul class="list-nav">
            <li class="nav-item">Việc Làm IT</li>
            <li class="nav-item">Top Công ty IT</li>
            <li class="nav-item">Blog</li>
            <li class="nav-item"><?php echo $_SESSION['user']; ?></li>
            <!-- <li class="nav-item">Chuyện IT</li> -->
          </ul>
        </nav>
        <div class="tool-search">
          <div class="search-input">
            <input
              class="input-text"
              type="text"
              placeholder="Tìm kiếm theo kỹ năng chức vụ của công ty"
            />
          </div>
          <div class="search-locate">
            <select name="" class="locate-name">
              <option value="">Da Nang</option>
              <option value="">Quang Nam</option>
              <option value="">Ho Chi Minh</option>
              <option value="">Ha Noi</option>
            </select>
            <!-- <span class="locate-name">Da Nang</span>
            <i class="locate-select fa-solid fa-chevron-down"></i> -->
          </div>
          <a href="" class="btn-search">
            <i class="btn-search-icon fa-solid fa-magnifying-glass"></i>
          </a>
        </div>
        <div class="header-right">
          <h4 class="header-contract">Liên Hệ Tuyển Dụng</h4>
          <a href="../Login/index.html" class="header-login"
            ><h4>Đăng Nhập</h4></a
          >
          <div class="header-language">
            <span class="EN" n>EN</span>
            <span class="VI">VI</span>
          </div>
        </div>
      </div>
    </header>
    <main class="container">
      <div class="background-container">
        <div class="filter-jobs">
          <select name="" class="filter-select">
            <option value="">Tất cả</option>
            <option value="">Intern</option>
            <option value="">Fresher</option>
            <option value="">Junior</option>
            <option value="">Senior</option>
            <option value="">Manager</option>
          </select>
          <select name="" class="filter-select">
            <option value="">Tất cả</option>
            <option value="">≥ 500 USD</option>
            <option value="">≥ 1000 USD</option>
            <option value="">≥ 1500 USD</option>
            <option value="">≥ 2000 USD</option>
          </select>
          <!-- <input type="text" class="filter-city" /> -->
          <div class="filter-setup">
            <div class="filter-icon">
              <i class="fa-solid fa-filter"></i>
            </div>
            <p>Clear all filters</p>
          </div>
        </div>

        <div class="search-results">
          <div class="search-page--job">
            <div class="job-content">
              <h3>20 IT Jobs in Da Nang</h3>
              <ul class="list-recruit">
                <li class="recruit-item">
                  <div class="recruit-logo">
                    <img src="img/logo FSOFT dọc.webp " alt="" />
                  </div>
                  <div class="recruit-description">
                    <h4 class="recruit-name">
                      Senior SysOps Engineer (DevOps, Cloud)
                    </h4>
                    <div class="recruit-wage">
                      <i class="fa-solid fa-dollar-sign"></i>
                      <p>Negotiable</p>
                    </div>
                    <div class="recruit-job">
                      <input type="button" class="job-item" value="DevOps" />
                      <input type="button" class="job-item" value="Cloud" />
                      <input
                        type="button"
                        class="job-item"
                        value="System Admin"
                      />
                    </div>
                  </div>
                  <div class="recruit-location">
                    <h4>Ho Chi Minh</h4>
                    <p>6 ngày trước</p>
                  </div>
                </li>
                <li class="recruit-item">
                  <div class="recruit-logo">
                    <img src="img/logo FSOFT dọc.webp" alt="" />
                  </div>
                  <div class="recruit-description">
                    <h4 class="recruit-name">
                      Senior SysOps Engineer (DevOps, Cloud)
                    </h4>
                    <div class="recruit-wage">
                      <i class="fa-solid fa-dollar-sign"></i>
                      <p>Negotiable</p>
                    </div>
                    <div class="recruit-job">
                      <input type="button" class="job-item" value="DevOps" />
                      <input type="button" class="job-item" value="Cloud" />
                      <input
                        type="button"
                        class="job-item"
                        value="System Admin"
                      />
                    </div>
                  </div>
                  <div class="recruit-location">
                    <h4>Ho Chi Minh</h4>
                    <p>6 ngày trước</p>
                  </div>
                </li>
                <li class="recruit-item">
                  <div class="recruit-logo">
                    <img src="img/logo FSOFT dọc.webp" alt="" />
                  </div>
                  <div class="recruit-description">
                    <h4 class="recruit-name">
                      Senior SysOps Engineer (DevOps, Cloud)
                    </h4>
                    <div class="recruit-wage">
                      <i class="fa-solid fa-dollar-sign"></i>
                      <p>Negotiable</p>
                    </div>
                    <div class="recruit-job">
                      <input type="button" class="job-item" value="DevOps" />
                      <input type="button" class="job-item" value="Cloud" />
                      <input
                        type="button"
                        class="job-item"
                        value="System Admin"
                      />
                    </div>
                  </div>
                  <div class="recruit-location">
                    <h4>Ho Chi Minh</h4>
                    <p>6 ngày trước</p>
                  </div>
                </li>
                <li class="recruit-item">
                  <div class="recruit-logo">
                    <img src="../../img/logo FSOFT dọc.webp" alt="" />
                  </div>
                  <div class="recruit-description">
                    <h4 class="recruit-name">
                      Senior SysOps Engineer (DevOps, Cloud)
                    </h4>
                    <div class="recruit-wage">
                      <i class="fa-solid fa-dollar-sign"></i>
                      <p>Negotiable</p>
                    </div>
                    <div class="recruit-job">
                      <input type="button" class="job-item" value="DevOps" />
                      <input type="button" class="job-item" value="Cloud" />
                      <input
                        type="button"
                        class="job-item"
                        value="System Admin"
                      />
                    </div>
                  </div>
                  <div class="recruit-location">
                    <h4>Ho Chi Minh</h4>
                    <p>6 ngày trước</p>
                  </div>
                </li>
                <li class="recruit-item">
                  <div class="recruit-logo">
                    <img src="../../img/logo FSOFT dọc.webp" alt="" />
                  </div>
                  <div class="recruit-description">
                    <h4 class="recruit-name">
                      Senior SysOps Engineer (DevOps, Cloud)
                    </h4>
                    <div class="recruit-wage">
                      <i class="fa-solid fa-dollar-sign"></i>
                      <p>Negotiable</p>
                    </div>
                    <div class="recruit-job">
                      <input type="button" class="job-item" value="DevOps" />
                      <input type="button" class="job-item" value="Cloud" />
                      <input
                        type="button"
                        class="job-item"
                        value="System Admin"
                      />
                    </div>
                  </div>
                  <div class="recruit-location">
                    <h4>Ho Chi Minh</h4>
                    <p>6 ngày trước</p>
                  </div>
                </li>
                <li class="recruit-item">
                  <div class="recruit-logo">
                    <img src="../../img/logo FSOFT dọc.webp" alt="" />
                  </div>
                  <div class="recruit-description">
                    <h4 class="recruit-name">
                      Senior SysOps Engineer (DevOps, Cloud)
                    </h4>
                    <div class="recruit-wage">
                      <i class="fa-solid fa-dollar-sign"></i>
                      <p>Negotiable</p>
                    </div>
                    <div class="recruit-job">
                      <input type="button" class="job-item" value="DevOps" />
                      <input type="button" class="job-item" value="Cloud" />
                      <input
                        type="button"
                        class="job-item"
                        value="System Admin"
                      />
                    </div>
                  </div>
                  <div class="recruit-location">
                    <h4>Ho Chi Minh</h4>
                    <p>6 ngày trước</p>
                  </div>
                </li>
                <li class="recruit-item">
                  <div class="recruit-logo">
                    <img src="../../img/logo FSOFT dọc.webp" alt="" />
                  </div>
                  <div class="recruit-description">
                    <h4 class="recruit-name">
                      Senior SysOps Engineer (DevOps, Cloud)
                    </h4>
                    <div class="recruit-wage">
                      <i class="fa-solid fa-dollar-sign"></i>
                      <p>Negotiable</p>
                    </div>
                    <div class="recruit-job">
                      <input type="button" class="job-item" value="DevOps" />
                      <input type="button" class="job-item" value="Cloud" />
                      <input
                        type="button"
                        class="job-item"
                        value="System Admin"
                      />
                    </div>
                  </div>
                  <div class="recruit-location">
                    <h4>Ho Chi Minh</h4>
                    <p>6 ngày trước</p>
                  </div>
                </li>
                <li class="recruit-item">
                  <div class="recruit-logo">
                    <img src="../../img/logo FSOFT dọc.webp" alt="" />
                  </div>
                  <div class="recruit-description">
                    <h4 class="recruit-name">
                      Senior SysOps Engineer (DevOps, Cloud)
                    </h4>
                    <div class="recruit-wage">
                      <i class="fa-solid fa-dollar-sign"></i>
                      <p>Negotiable</p>
                    </div>
                    <div class="recruit-job">
                      <input type="button" class="job-item" value="DevOps" />
                      <input type="button" class="job-item" value="Cloud" />
                      <input
                        type="button"
                        class="job-item"
                        value="System Admin"
                      />
                    </div>
                  </div>
                  <div class="recruit-location">
                    <h4>Ho Chi Minh</h4>
                    <p>6 ngày trước</p>
                  </div>
                </li>
                <li class="recruit-item">
                  <div class="recruit-logo">
                    <img src="../../img/logo FSOFT dọc.webp" alt="" />
                  </div>
                  <div class="recruit-description">
                    <h4 class="recruit-name">
                      Senior SysOps Engineer (DevOps, Cloud)
                    </h4>
                    <div class="recruit-wage">
                      <i class="fa-solid fa-dollar-sign"></i>
                      <p>Negotiable</p>
                    </div>
                    <div class="recruit-job">
                      <input type="button" class="job-item" value="DevOps" />
                      <input type="button" class="job-item" value="Cloud" />
                      <input
                        type="button"
                        class="job-item"
                        value="System Admin"
                      />
                    </div>
                  </div>
                  <div class="recruit-location">
                    <h4>Ho Chi Minh</h4>
                    <p>6 ngày trước</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <div class="search-page-preview">
            <div class="preview-header">
              <h4 class="name-job">Senior SysOps Engineer (DevOps, Cloud)</h4>
              <h6>FPT Software</h6>
              <div class="Apply">
                <input type="button" class="btn-apply" value="Apply" />
                <i class="fa-regular fa-heart"></i>
              </div>
            </div>

            <div class="preview-content">
              <div class="preview-description">
                <div class="recruit-job">
                  <input type="button" class="job-item" value="DevOps" />
                  <input type="button" class="job-item" value="Cloud" />
                  <input type="button" class="job-item" value="System Admin" />
                </div>
                <div class="recruit-wage">
                  <i class="fa-solid fa-dollar-sign"></i>
                  <p>Negotiable</p>
                </div>
                <div class="recruit-locate">
                  <i class="fa-solid fa-location-dot"></i>
                  <p>
                    62 Tran Quang Khai, Tan Dinh Ward, District 1, Ho Chi Minh
                  </p>
                </div>
              </div>
              <div class="preview-reason">
                <h4>3 Lý Do Để Gia Nhập Công Ty</h4>
                <li>No.1 Start Up of the Construction Tech in Japan</li>
                <li>Hybrid working style</li>
                <li>Attractive salary and Macbook pro</li>
              </div>
              <div class="preview-describe">
                <h4>Mô tả công việc</h4>
                <p>
                  Working knowledge and hands on experience with SCCM 2012 R2 /
                  SCCM 2008 Design, implement, configure, and maintain various
                  Azure SaaS Cloud Services such as Azure AD, SSO SAML, AIP,
                  ATP, ASR, CAS, EM+S, Teams, Intune, AAD Connect, Exchange
                  Online and O365. Also familiar with on-premise servers such as
                  ADFS, ADDS, Domain Controller, etc. Familiar with PowerShell
                  to configure Exchange Online and AzureAD. Deploy and maintain
                  Azure IaaS Virtual Machines and Azure Application and
                  Networking Services to support growth into the cloud. Optimize
                  Azure buildouts for cost/performance (VM optimization,
                  reserved instances, etc.) Own the business relationship with
                  Microsoft account team to ensure we are taking advantage of
                  all of Microsoft’s training, sales support and other
                  offerings. Recommend, develop, plan, manage, implement, and
                  fully document IT projects Identify improvements to IT
                  documentation, network maps, processes/procedures, and tickets
                  Manage and respond to escalated client inquiries Research
                  products and new technologies to increase efficiency of
                  business and operations Be the escalation point for other IT
                  Systems Engineers and Service Desk Engineers Keep all tickets
                  and projects updated and track time in a detailed format.
                </p>
              </div>
              <div class="preview-jd">
                <h4>Yêu Cầu Công Việc</h4>
                <ul class="list-jd">
                  <li class="item-jd">
                    College or University Graduation (IT is preferable)
                  </li>
                  <li class="item-jd">
                    Previous working experience as an System Admin, CloudOps,
                    DevOps, IT Engineer for 4 years
                  </li>
                  <li class="item-jd">
                    In-depth knowledge of computer systems and mobile devices
                  </li>
                  <li class="item-jd">
                    Hands on experience with diagnosing and resolving tough
                    technical issues
                  </li>
                  <li class="item-jd">
                    Excellent communication and interpersonal skills
                  </li>
                  <li class="item-jd">
                    Customer-oriented, patient, fast learning and proactive
                  </li>
                  <li class="item-jd">
                    English skills: reading, understanding. Can writing and
                    speaking in English is a plus
                  </li>
                </ul>
              </div>
              <div class="preview-whynot">
                <h4>Tại Sao Bạn Sẽ Yêu Thích Làm Việc Tại Đây</h4>
                <li>
                  Company shuttle buses provide convenient way of transportation
                  for all employees (HCM)
                </li>
                <li>International, dynamic, friendly working environment</li>
                <li>
                  Employee 's engagement activities: You will be involved in a
                  fun and respectful working environment, we support monthly
                  budget for team 's engagement
                </li>
                <li>
                  Other benefits: One-off allowance for setting up working from
                  home corner, work dedication bonus
                </li>
              </div>
            </div>

            <div class="preview-footer">
              <div class="preview-company__header">
                <img src="img/logo FSOFT dọc.webp" alt="" />
                <h4>FPT Software</h4>
              </div>
              <ul class="preview-company__description">
                <li class="description-item">
                  <i class="fa-solid fa-gear"></i>
                  <span>Dịch vụ</span>
                </li>
                <li class="description-item">
                  <i class="fa-solid fa-people-group"></i>
                  <span>1000+</span>
                </li>
                <li class="description-item">
                  <i class="fa-sharp fa-solid fa-calendar-days"></i>
                  <span>Thứ 2 - Thứ 6</span>
                </li>
                <li class="description-item">
                  <img src="img/vn.png" alt="" />
                  <span>Vietnam</span>
                </li>
                <li class="description-item">
                  <i class="fa-solid fa-clock"></i>
                  <span>Thêm lương OT</span>
                </li>
              </ul>
              <div class="btn-company-home">Xem Công Ty</div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer class="footer">
      <div class="footer-link">
        <div class="list-link">
          <h5 class="footer-title">Về ITviec</h5>
          <a href="">Trang Chủ</a>
          <a href="">Về ITviec.com</a>
          <a href="">Liên Hệ</a>
          <a href="">Việc Làm IT</a>
          <a href="">Câu hỏi thường gặp</a>
        </div>

        <div class="list-link">
          <h5 class="footer-title">Điều khoản chung</h5>
          <a href="">Quy định bảo mật</a>
          <a href="">Quy chế hoạt động</a>
          <a href="">Giải quyết khiếu nại</a>
          <a href="">Thoả thuận sử dụng</a>
          <a href="">Thông cáo báo chí</a>
        </div>

        <div class="list-link">
          <h5 class="footer-title">General</h5>
          <span>Copyright © IT VIEC JSC</span>
          <span>MST: 0312192258</span>
          <div class="contact">
            <a href="">
              <i class="fa-brands fa-facebook"> </i>
            </a>
            <a href="">
              <i class="fa-brands fa-twitter"></i>
            </a>
            <a href="">
              <i class="fa-brands fa-youtube"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="footer-post">
        <h5 class="footer-title">Liên hệ để đăng tin tuyển dụng tại</h5>
        <p>
          Hồ Chí Minh: (+84) 977 460 519 - Hà Nội: (+84) 983 131 351 - Email:
          love@itviec.com
        </p>
      </div>
    </footer>
  </body>
</html>
