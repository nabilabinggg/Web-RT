<html>
<form action="/register" method="post">
    <table style="text-align: left; justify-content: center;">
        <tr>
            <th>
                ID
            </th>
            <td> : <input type="input" name="id"></td>
        </tr>
        <tr>
            <th> USERNAME </th>
            <td> : <input type="input" name="username"></td>
        </tr>
        <tr>
            <th> PASSWORD </th>
            <td> : <input type="text" name="password"></td>
        </tr>
        <tr>
            <th>
                ROLE ID
            </th>
            <td>
                : <select name="role_id" id="">
                    <option value="1"> superadmin </option>

                </select>
            </td>
        </tr>
        <button type="submit" style="text-align:justify">Save</button>
    </table>

</html>