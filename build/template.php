<?php require_once 'templates/header.php'?>
    <style>
      .temprow {
        padding: 0 0 30px 0;
      }

            .tempinner {
        margin-bottom: 30px;
        font-size: 50px;
        background: #ccc;
      }

            .ttl {
        font-size: 26px;
        color: #00578f;
        text-decoration: underline;
        margin-bottom: 20px;
        margin-top: 30px;
        font-weight: 700;
      }

            .rc-mb .radio,
      .rc-mb .checkbox {
        margin-bottom: 10px;
      }

          </style>
    <div class="container">
      <div class="ttl">Static Content & typography</div>
      <div class="static-content">
        <h1>h1 heading</h1>
        <h2>h2 heading</h2>
        <h3>h3 heading</h3>
        <h4>h4 heading</h4>
        <h5>h5 heading</h5>
        <h6>h6 heading</h6>
        <blockquote>Ex sint in qui deserunt tempor do ullamco irure quis eiusmod incididunt commodo sunt in deserunt voluptate et ut sint cupidatat adipiscing non ea velit do aliqua laborum incididunt elit consectetur in incididunt laboris tempor labore in sed dolor ut laboris incididunt incididunt veniam elit et anim consectetur ullamco in do labore mollit ut in mollit dolore anim labore esse in aute ut in laborum veniam incididunt ex veniam nulla 
        </blockquote>
        <q>Sed eu elit nisi deserunt ut consequat consectetur excepteur lorem ut ex officia mollit pariatur esse consequat sint adipiscing lorem ut dolore cupidatat in ut incididunt deserunt incididunt officia dolor dolor eiusmod ex sint velit do ut mollit dolore dolore anim dolore dolore ut velit mollit ut ipsum in dolor quis dolor deserunt aliquip velit eiusmod adipiscing cupidatat irure eiusmod fugiat ullamco non sunt eiusmod exercitation excepteur incididunt anim magna consequat sint reprehenderit nostrud irure consequat dolor eu ad ut ipsum irure exercitation incididunt reprehenderit lorem commodo dolor lorem cupidatat nulla sunt tempor ut non quis deserunt veniam cupidatat do amet ut magna eu consequat ut nulla adipiscing consectetur minim ipsum qui nostrud ad sit ut cupidatat in ex nostrud 
        </q>
        <hr>
        <p>Lorem <a href="#">some link </a>Nulla voluptate, ut pariatur lorem cillum voluptate. Ex ut aliquip ex, do laboris sint, culpa aliqua? Proident commodo ipsum nisi sed, est officia enim. Ut lorem, ut velit veniam sint, sint anim, in. Aliqua ut consequat, velit consequat ut, et. <i>ITALIC In nulla cillum labore eiusmod irure, dolore in non. Irure ut consequat, velit qui ut velit, est fugiat. Eu officia, est, ut exercitation et, labore id laborum. Sed reprehenderit, qui minim fugiat ut, dolor est? Id dolor sit fugiat qui occaecat lorem. </i>
        </p>
        <ol>
          <li>Ordered List item 0</li>
          <li>Ordered List item 1</li>
          <li>Ordered List item 2</li>
          <li>Ordered List item 3</li>
          <li>Ordered List item 4</li>
        </ol>
        <p>Laboris sint ut proident exercitation deserunt deserunt tempor commodo duis tempor esse reprehenderit adipiscing proident dolor voluptate laboris labore dolor cillum enim ipsum ut eu ut velit laborum in qui aliqua sit enim sunt ut irure laboris officia dolor ut mollit officia proident lorem anim ipsum id laboris deserunt aute irure aliqua do irure cupidatat proident ex est culpa reprehenderit proident ut pariatur cupidatat commodo fugiat in adipiscing amet tempor quis consequat ex nisi esse irure non ut in sint eu commodo ex quis cillum labore commodo aliqua consequat duis veniam magna nisi consectetur eiusmod ex eu dolor adipiscing esse excepteur elit magna quis ut enim officia reprehenderit proident anim amet do qui qui in cillum tempor cillum anim voluptate enim cupidatat irure veniam cillum non labore culpa occaecat cillum et anim laborum consectetur nisi proident lorem in dolor consequat duis dolore fugiat dolore non duis qui voluptate qui aliquip <strong>strong text</strong>
        </p>
        <ul>
          <li>Unordered List item 0</li>
          <li>Unordered List item 1</li>
          <li>Unordered List item 2</li>
          <li>Unordered List item 3</li>
          <li>Unordered List item 4</li>
        </ul>
        <table>
          <thead>
            <tr>
              <th> Heading</th>
              <th> Heading</th>
              <th> Heading</th>
              <th> Heading</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td> column</td>
              <td> column</td>
              <td> column</td>
              <td> column</td>
            </tr>
            <tr>
              <td> column</td>
              <td> column</td>
              <td> column</td>
              <td> column</td>
            </tr>
            <tr>
              <td> column</td>
              <td> column</td>
              <td> column            </td>
              <td> column            </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="ttl">Forms items  </div>
      <div class="temprow">
        <button class="btn">default button      </button>
      </div>
      <div class="temprow">
        <button class="btn" disabled>disabled button</button>
      </div>
      <div class="temprow">
        <input class="input" type="text" placeholder="Enter Your name">
      </div>
      <div class="temprow">
        <textarea class="texarea" placeholder="Message"></textarea>
      </div>
      <div class="temprow">
        <select class="select">
          <option value="1">one</option>
          <option value="2">two</option>
          <option value="3">three    </option>
        </select>
      </div>
      <form class="temprow rc-mb">
        <label class="radio  radio--mod-class_1 radio--mod-class_2">
          <input type="radio" name="radio_name"/><span>radio button text 0</span>
        </label>
        <label class="radio">
          <input type="radio" name="radio_name"/><span>radio button text 2</span>
        </label>
        <label class="radio">
          <input type="radio" name="radio_name"/><span>radio button text 3</span>
        </label>
      </form>
      <form class="temprow rc-mb">
        <label class="checkbox  checkbox--mod-class_1 checkbox--mod-class_2">
          <input type="checkbox" id="check_id" checked="checked" name="check_name"/><span>checkbox button text 0</span>
        </label>
        <label class="checkbox">
          <input type="checkbox" checked="checked" name="check_name"/><span>checkbox button text 1</span>
        </label>
        <label class="checkbox">
          <input type="checkbox" name="check_name"/><span>checkbox button text 2</span>
        </label>
        <label class="checkbox">
          <input type="checkbox" name="checkbox"/><span>checkbox button text 3</span>
        </label>
      </form>
      <div class="ttl">greed</div>
      <div class="row">
        <div class="col xs-12">
          <div class="tempinner">12</div>
        </div>
        <div class="col xs-1">
          <div class="tempinner">1</div>
        </div>
        <div class="col xs-11">
          <div class="tempinner">11</div>
        </div>
        <div class="col xs-2">
          <div class="tempinner">2</div>
        </div>
        <div class="col xs-10">
          <div class="tempinner">10</div>
        </div>
        <div class="col xs-3">
          <div class="tempinner">3</div>
        </div>
        <div class="col xs-9">
          <div class="tempinner">9</div>
        </div>
        <div class="col xs-4">
          <div class="tempinner">4</div>
        </div>
        <div class="col xs-8">
          <div class="tempinner">8</div>
        </div>
        <div class="col xs-5">
          <div class="tempinner">5</div>
        </div>
        <div class="col xs-7">
          <div class="tempinner">7</div>
        </div>
        <div class="col xs-6">
          <div class="tempinner">6</div>
        </div>
        <div class="col xs-6">
          <div class="tempinner">6</div>
        </div>
      </div>
    </div>
<?php require_once 'templates/footer.php'?>