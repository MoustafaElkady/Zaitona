
<!-- <div class="ui sidebar inverted vertical menu">
      <a class="item" href="./login.html">
        <h4 class="ui grey header">John Doe</h4>
        <p>Sign Out</p>
      </a>
      <a class="active gray item" href="./dashboard.html">
        Dashboard
      </a>
      <a class="item" href="./sales.html">
        Sales
        <div class="ui label">11</div>
      </a>
      <a class="item" href="./products.html">
        Products
        <div class="ui label">2</div>
      </a>
      <a class="item" href="./customers.html">
        Customers
      </a>
      <a class="item" href="./employees.html">
        Employees
      </a>
    </div> -->
<div class="ui grid container">
      <div class="ui grid container">
        <!-- Non-responsive main left menu -->
        <div class="ui bottom attached segment pushable">
		  <div class="ui visible left vertical sidebar menu">
		    <a class="item ui medium rounded image">
		      <?php echo $this->loadImg($this->course['pic']); ?>
		    </a>
		    <a class="item" href="<?php echo $this->route(["controller" => "category" , "action" => "view" , "params" => ["id" => $this->category['id']]]); ?>">
		      <i class="block layout icon"></i>
		      <h2><?php echo $this->text("CATEGORY"); ?></h2>
		      <?php echo $this->category['title']; ?>
		    </a>
		    <a class="item">
		      <i class="smile icon"></i>
		      Friends
		    </a>
		    <a class="item">
		      <i class="calendar icon"></i>
		      History
		    </a>
		  </div>
		  <div class="pusher">
		    <div class="ui basic segment">
		      





		  <div class="ui icon message">
            <i class="empty heart icon"></i>
            <div class="content">
              <div class="header">
                Welcome to our admin theme!
              </div>
              <p>You'll find a lot of common admin views here. For requests, just tweet <a href="https://twitter.com/SemanticKit">@SemanticKit</a> or <a href="https://twitter.com/travisvalentine">@travisvalentine</a>.</p>
            </div>
          </div>

          <div class="ui three column row">
            <div class="dashboard-stat column">
              <div class="ui segments">
                <div class="ui segment">
                  <h3 class="ui blue header">Any Header</h3>
                </div>
                <div class="ui secondary olive green inverted dashboard center aligned segment">
                  <div class="ui dashboard statistic">
                    <div class="value">
                      5,550
                    </div>
                    <div class="label">
                      Downloads
                    </div>

                    <div class="ui two mini statistics">
                      <div class="statistic">
                        <div class="value">
                          120
                        </div>
                        <div class="label">
                          iPhone
                        </div>
                      </div>
                      <div class="statistic">
                        <div class="value">
                          700
                        </div>
                        <div class="label">
                          Android
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="ui segment">
                  <p>Footer</p>
                </div>
              </div>
            </div>
            <div class="dashboard-stat column">
              <div class="ui segments">
                <div class="ui segment">
                  <h3 class="ui blue header">Any Header</h3>
                </div>
                <div class="ui teal inverted dashboard center aligned segment">
                  <div class="ui dashboard statistic">
                    <div class="value">
                      5,550
                    </div>
                    <div class="label">
                      Downloads
                    </div>
                  </div>

                  <div class="ui center animated list">
                    <a class="item">
                      <i class="add circle icon"></i>
                      <div class="content">
                        <div class="description">10% from last week</div>
                      </div>
                    </a>
                    <a class="item">
                      <i class="minus circle icon"></i>
                      <div class="content">
                        <div class="description">5% from 2 weeks ago</div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="ui segment">
                  <p>Footer</p>
                </div>
              </div>
            </div>
            <div class="dashboard-stat column">
              <div class="ui segments">
                <div class="ui segment">
                  <h3 class="ui blue header">Any Header</h3>
                </div>
                <div class="ui secondary blue inverted dashboard center aligned segment">
                  <div class="ui dashboard statistic">
                    <div class="value">
                      5,550
                    </div>
                    <div class="label">
                      Downloads
                    </div>
                  </div>
                </div>
                <div class="ui segment">
                  <p>Footer</p>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="top-table column">
              <div class="ui segments">
                <div class="ui segment">
                  <h3 class="ui blue header">Any Header</h3>
                </div>
                <div class="ui segment">
                  <table class="ui very basic table">
                    <tbody>
                      <tr>
                        <td>1.</td>
                        <td>Item 1</td>
                        <td>$20</td>
                        <td>30</td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Item 2</td>
                        <td>$22</td>
                        <td>24</td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Item 3</td>
                        <td>$15</td>
                        <td>20</td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>Item 4</td>
                        <td>$10</td>
                        <td>18</td>
                      </tr>
                      <tr>
                        <td>5.</td>
                        <td>Item 5</td>
                        <td>$15</td>
                        <td>15</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <div class="doughnut-chart column">
              <div class="ui segments">
                <div class="ui segment">
                  <h3 class="ui blue header">Any Header</h3>
                </div>
                <div class="ui segment">
                  <canvas id="doughnuts_are_tasty" width="274" height="179"></canvas>
                  <ul id="dashboard_legend"></ul>
                </div>
              </div>
            </div>
          </div>
          <div class="ui three column row">
            <div class="dashboard-stat column">
              <div class="ui segments">
                <div class="ui segment">
                  <h3 class="ui blue header">Any Header</h3>
                </div>
                <div class="ui violet inverted dashboard center aligned segment">
                  <div class="ui dashboard statistic">
                    <div class="value">
                      5,550
                    </div>
                    <div class="label">
                      Downloads
                    </div>
                  </div>
                </div>
                <div class="ui segment">
                  Footer
                </div>
              </div>
            </div>

            <div class="dashboard-stat column">
              <div class="ui segments">
                <div class="ui segment">
                  <h3 class="ui blue header">Any Header</h3>
                </div>
                <div class="ui grey inverted dashboard center aligned segment">
                  <div class="ui dashboard statistic">
                    <div class="value">
                      5,550
                    </div>
                    <div class="label">
                      Downloads
                    </div>
                  </div>
                </div>
                <div class="ui segment">
                  Footer
                </div>
              </div>
            </div>

            <div class="dashboard-stat column">
              <div class="ui segments">
                <div class="ui segment">
                  <h3 class="ui blue header">Any Header</h3>
                </div>
                <div class="ui pink inverted dashboard center aligned segment">
                  <div class="ui dashboard statistic">
                    <div class="value">
                      5,550
                    </div>
                    <div class="label">
                      Downloads
                    </div>
                  </div>
                </div>
                <div class="ui segment">
                  Footer
                </div>
              </div>
            </div>
          </div>
      







		    </div>
		  </div>
		</div>
        <div class="ui main grid">
          <!-- Responsive top menu -->
          <!-- <div class="ui fixed inverted main menu">
            <div class="ui container">
              <a class="launch icon item sidebar-toggle">
                <i class="sidebar icon"></i>
              </a>
            </div>
          </div>
 -->
          
    	</div>
    </div>
</div>
