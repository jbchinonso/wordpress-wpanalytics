<?php require 'partials/header.php' ?>

  <body>
    <div class="d-flex">
      <div class="dashboard-sidebar">
        <div class="menu">
          <span class="logo-white"> </span>
          <span class="menu-item">
            <a href="/">
              <img src="/images/home.svg" alt="" />
            </a>
          </span>
          <span class="menu-item">
            <a href="/">
              <img src="/images/people.svg" alt="" />
            </a>
          </span>
          <span class="menu-item">
            <a href="/">
              <img src="/images/settings.svg" alt="" />
            </a>
          </span>
        </div>
        <div class="signout">
          <a href="/auth/login">
            <img src="/images/logout.svg" alt="" />
          </a>
        </div>
      </div>
      <div class="dashboard--authors">
        <div class="searchbar">
          <div>
            <label for="search" class="search--author--label">
              <input
                type="text"
                class="search--area"
                placeholder="Search for author"
              />
            </label>
          </div>
          <div class="avatar"><img src="/images/admin.svg" alt="" /> </div>
        </div>

        <div class="table--container">
          <h2 class="page--title">Dashboard</h2>
          <div class="dashboard-body">
            <div class="chartside">
              <div class="charts">
                <div class="barchart">
                  <img
                    src="/images/barchart.svg"
                    alt=""
                    width="100%"
                    height="100%"
                  />
                </div>
                <div class="piechart">
                  <img
                    src="/images/piechart.svg"
                    alt=""
                    width="100%"
                    height="100%"
                  />
                </div>
              </div>

              <div class="stats">
                <div class="top-shared-author">
                  <div class="top-author-header">Top Shared Author</div>
                  <div class="top-author-row">
                    <div class="top-author-index">1</div>
                    <div class="top-author-wrap">
                      <div class="top-author-name">
                        <span class="top-author-image d-block"
                          ><img src="/images/author.svg" alt=""
                        /></span>
                        Jenny Wilson
                      </div>
                      <div class="top-author-shares">3.4k Shares</div>
                    </div>
                  </div>

                  <div class="top-author-row">
                    <div class="top-author-index">2</div>
                    <div class="top-author-wrap">
                      <div class="top-author-name">
                        <span class="top-author-image d-block"
                          ><img src="/images/author.svg" alt=""
                        /></span>
                        Jenny Wilson
                      </div>
                      <div class="top-author-shares">3.4k Shares</div>
                    </div>
                  </div>

                  <div class="top-author-row">
                    <div class="top-author-index">3</div>
                    <div class="top-author-wrap">
                      <div class="top-author-name">
                        <span class="top-author-image d-block"
                          ><img src="/images/author.svg" alt=""
                        /></span>
                        Jenny Wilson
                      </div>
                      <div class="top-author-shares">3.4k Shares</div>
                    </div>
                  </div>

                  <div class="top-author-row">
                    <div class="top-author-index">4</div>
                    <div class="top-author-wrap">
                      <div class="top-author-name">
                        <span class="top-author-image d-block"
                          ><img src="/images/author.svg" alt=""
                        /></span>
                        Jenny Wilson
                      </div>
                      <div class="top-author-shares">3.4k Shares</div>
                    </div>
                  </div>

                  <div class="top-author-row">
                    <div class="top-author-index">5</div>
                    <div class="top-author-wrap hide-bottom">
                      <div class="top-author-name">
                        <span class="top-author-image d-block"
                          ><img src="/images/author.svg" alt=""
                        /></span>
                        Jenny Wilson
                      </div>
                      <div class="top-author-shares">3.4k Shares</div>
                    </div>
                  </div>
                </div>

                <div class="top-posts">
                  <div class="top-post-header">Top Posts</div>

                  <div class="top-post-row d-flex">
                    <span class="post-index d-block">1</span>
                    <div class="title-index d-flex">
                      <span class="top-post-title d-block">
                        <a href href="">
                          Amet minim mollit non deserunt ullamco est sit aliqua
                          dolor do amet sint.</a
                        >
                      </span>
                      <div class="pic-name-shares d-flex">
                        <div class="top-author-name d-flex">
                          <span class="top-author-image d-block"
                            ><img src="/images/author.svg" alt=""
                          /></span>
                          Jenny Wilson
                        </div>

                        <div class="top-author-shares">3.4k</div>
                      </div>
                    </div>
                  </div>

                  <div class="top-post-row d-flex">
                    <span class="post-index d-block">2</span>
                    <div class="title-index d-flex">
                      <span class="top-post-title d-block">
                        <a href href="">
                          Amet minim mollit non deserunt ullamco est sit aliqua
                          dolor do amet sint.</a
                        >
                      </span>
                      <div class="pic-name-shares d-flex">
                        <div class="top-author-name d-flex">
                          <span class="top-author-image d-block"
                            ><img src="/images/author.svg" alt=""
                          /></span>
                          Jenny Wilson
                        </div>

                        <div class="top-author-shares">3.4k</div>
                      </div>
                    </div>
                  </div>

                  <div class="top-post-row d-flex">
                    <span class="post-index d-block">3</span>
                    <div class="title-index d-flex">
                      <span class="top-post-title d-block">
                        <a href href="">
                          Amet minim mollit non deserunt ullamco est sit aliqua
                          dolor do amet sint.</a
                        >
                      </span>
                      <div class="pic-name-shares d-flex">
                        <div class="top-author-name d-flex">
                          <span class="top-author-image d-block"
                            ><img src="/images/author.svg" alt=""
                          /></span>
                          Jenny Wilson
                        </div>

                        <div class="top-author-shares">3.4k</div>
                      </div>
                    </div>
                  </div>

                  <div class="top-post-row d-flex">
                    <span class="post-index d-block">4</span>
                    <div class="title-index d-flex">
                      <span class="top-post-title d-block">
                        <a href href="">
                          Amet minim mollit non deserunt ullamco est sit aliqua
                          dolor do amet sint.</a
                        >
                      </span>
                      <div class="pic-name-shares d-flex">
                        <div class="top-author-name d-flex">
                          <span class="top-author-image d-block"
                            ><img src="/images/author.svg" alt=""
                          /></span>
                          Jenny Wilson
                        </div>

                        <div class="top-author-shares">3.4k</div>
                      </div>
                    </div>
                  </div>

                  <div class="top-post-row d-flex">
                    <span class="post-index d-block">5</span>
                    <div class="title-index d-flex hide-bottom">
                      <span class="top-post-title d-block">
                        <a href href="">
                          Amet minim mollit non deserunt ullamco est sit aliqua
                          dolor do amet sint.</a
                        >
                      </span>
                      <div class="pic-name-shares d-flex">
                        <div class="top-author-name d-flex">
                          <span class="top-author-image d-block"
                            ><img src="/images/author.svg" alt=""
                          /></span>
                          Jenny Wilson
                        </div>

                        <div class="top-author-shares">3.4k</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="rightbar">
              <div class="right--header d-flex">
                <span class="right-title">Authors</span>
                <span class="arrow"
                  ><img src="/images/forwardArrow.svg" alt=""
                /></span>
              </div>

              <div class="author--row d-flex">
                <div class="index">1</div>
                <div class="author--name-email d-flex">
                  <span class="author--photo"
                    ><img src="/images/author.svg" alt=""
                  /></span>
                  <div class="name--posts d-flex">
                    <div class="name">
                      Jenny Wilson
                      <span class="email">jennywilson@gmail.com</span>
                    </div>
                    <div class="posts">120 posts</div>
                  </div>
                </div>
              </div>

              <div class="author--row d-flex">
                <div class="index">2</div>
                <div class="author--name-email d-flex">
                  <span class="author--photo"
                    ><img src="/images/author.svg" alt=""
                  /></span>
                  <div class="name--posts d-flex">
                    <div class="name">
                      Cameron Williamson
                      <span class="email">jennywilson@gmail.com</span>
                    </div>
                    <div class="posts">120 posts</div>
                  </div>
                </div>
              </div>

              <div class="author--row d-flex">
                <div class="index">3</div>
                <div class="author--name-email d-flex">
                  <span class="author--photo"
                    ><img src="/images/author.svg" alt=""
                  /></span>
                  <div class="name--posts d-flex">
                    <div class="name">
                      Esther Howard
                      <span class="email">jennywilson@gmail.com</span>
                    </div>
                    <div class="posts">120 posts</div>
                  </div>
                </div>
              </div>

              <div class="author--row d-flex">
                <div class="index">4</div>
                <div class="author--name-email d-flex">
                  <span class="author--photo"
                    ><img src="/images/author.svg" alt=""
                  /></span>
                  <div class="name--posts d-flex">
                    <div class="name">
                      Darrell Steward
                      <span class="email">jennywilson@gmail.com</span>
                    </div>
                    <div class="posts">120 posts</div>
                  </div>
                </div>
              </div>

              <div class="author--row d-flex">
                <div class="index">5</div>
                <div class="author--name-email d-flex">
                  <span class="author--photo"
                    ><img src="/images/author.svg" alt=""
                  /></span>
                  <div class="name--posts d-flex">
                    <div class="name">
                      Devon Lane
                      <span class="email">jennywilson@gmail.com</span>
                    </div>
                    <div class="posts">120 posts</div>
                  </div>
                </div>
              </div>

              <div class="author--row d-flex">
                <div class="index">6</div>
                <div class="author--name-email d-flex">
                  <span class="author--photo"
                    ><img src="/images/author.svg" alt=""
                  /></span>
                  <div class="name--posts d-flex">
                    <div class="name">
                      Annette Black
                      <span class="email">jennywilson@gmail.com</span>
                    </div>
                    <div class="posts">120 posts</div>
                  </div>
                </div>
              </div>

              <div class="author--row d-flex">
                <div class="index">7</div>
                <div class="author--name-email d-flex hide-bottom">
                  <span class="author--photo"
                    ><img src="/images/author.svg" alt=""
                  /></span>
                  <div class="name--posts d-flex">
                    <div class="name">
                      Dianne Russell
                      <span class="email">jennywilson@gmail.com</span>
                    </div>
                    <div class="posts">120 posts</div>
                  </div>
                </div>
              </div>

              <div class="author--row d-flex">
                <div class="index">8</div>
                <div class="author--name-email d-flex hide-bottom">
                  <span class="author--photo"
                    ><img src="/images/author.svg" alt=""
                  /></span>
                  <div class="name--posts d-flex">
                    <div class="name">
                      Dianne Russell
                      <span class="email">jennywilson@gmail.com</span>
                    </div>
                    <div class="posts">120 posts</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
