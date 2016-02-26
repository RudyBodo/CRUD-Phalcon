<div class="page-header">
    <a href="create/"><h2>Add Row</h2></a>
    <h1>List Member</h1>
</div>
{% if id %}
<table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Phone Number</th>
      </tr>
    </thead>
    <tbody>
      <td>data.name</td>
      <td>data.address</td>
      <td>data.email</td>
      <td>data.phonenumber</td>
    </tbody>
</table>
{% else %}
  <p>all row</p>
{% endif %}
