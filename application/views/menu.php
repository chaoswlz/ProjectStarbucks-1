<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading" id="tableHeading">
        <h1>Menu</h1>
    </div>
    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th>Beverage</th>
            </tr>
        </thead>
        <tbody>
            {drink}
            <tr>
                <td><a href="menu{href}">{name}</a></td>
            </tr>
            {/drink}   
        </tbody>
    </table>
    
    <br>
    
    <table class="table">
    <thead>
            <tr>
                <th>Food</th>
            </tr>
        </thead>
        <tbody>
            {food}
            <tr>
                <td><a href="menu{href}">{name}</a></td>
            </tr>
            {/food}
        </tbody>
    </table>
</div>