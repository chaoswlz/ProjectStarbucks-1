<div class="panel panel-default">
    <!-- Default panel contents -->
    <div class="panel-heading" id="tableHeading"><h1>Inventory Recipe</h1></div>
    <!-- Table -->
    <table class="table">
        <thead>
            <tr>
                <th>Ingredent Name</th>
                <th>Recipe</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                {Ingredents}
                    <td>{name}</td>
                {/Ingredents}
                {Recipe}
                     <td>{menu}</td>
                {/Recipe}
            </tr>
        </tbody>
    </table>
</div>