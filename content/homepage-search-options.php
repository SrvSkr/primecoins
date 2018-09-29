    <div class="row homepage-search-options">
        <div class="col-sm-3">
            <label>Type of Accommodation</label>
            <select>
                <option>Entire House</option>
                <option>Apartment</option>
                <option>Studio</option>
                <option>Digs</option>
                <option>Room/Houseshare</option>
                <option>I don't mind</option>
            </select>
        </div>
        <div class="col-sm-3">
            <label>County</label>
            <select>
                <option>Dublin</option>
                <option>Louth</option>
                <option>Galway</option>
                <option>Mayo</option>
            </select>
        </div>
        <div class="col-sm-3">
            <label>Area</label>
            <select>
                <option>Artane</option>
                <option>Drumcondra</option>
                <option>Glasnevin</option>
                <option>Stoneybatter</option>
            </select>
        </div>
        <div class="col-sm-3">
            <label>Maximum Cost per Month</label>
            <p class="homepage-max_price">€<span id="output">500</span></p>
            <div class="slidecontainer">
              <input type="range" min="500" max="2500" value="500" class="" id="myRange">
            </div>
        </div>
        <div class="col-sm-12 button-holder">
            <a href="/search-results_property.php" style="margin:0 auto">
                <button class="btn btn-success">Search <i class="fa fa-search" aria-hidden="true"></i></button>
                 <a class="advanced-search-link" href="/advanced-search.php">Advanced Search</a>
            </a>
        </div>
        <div class="hidden-xs-up text-center closeit">&times; close</div>
    </div>
