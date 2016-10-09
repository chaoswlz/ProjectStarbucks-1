<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading" id="tableHeading"><h1>Inventory</h1></div>
    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
            {ingreds}
                <tr>
                    <td>{id}</td>
                    <td><a href=''>{name}</a></td>
                    <td>{quantity}</td>
                </tr>
            {/ingreds}
        </tbody>
    </table>
</div>