<div class="page-header">
    <h1>List Member</h1>
</div>
{% for datas in data %}
{% if loop.first %}
<table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Phone Number</th>
      </tr>
    </thead>
  {% endif %}
    <tbody>
      <tr>
        <td>{{ datas.name }}</td>
        <td>{{ datas.address }}</td>
        <td>{{ datas.email }}</td>
        <td>{{ datas.phonenumber }}</td>
      </tr>
    </tbody>
  {% if loop.last %}
  </table>
  {% endif %}
  {% else %}
  Data Empty
  {% endfor %}
