<table width="100%">
    <tr>
        <th>Image</th>
        <td>
            <input type="url" name="post[image]" size="80" value="<?=$image?>" />
        </td>
    </tr>
    
    <tr>
        <th>Small Image</th>
        <td>
            <input type="url" name="post[image-small]" size="80" value="<?=$image_small?>" />
        </td>
    </tr>
    
    <tr>
        <th>Website</th>
        <td>
            <input type="url" name="post[website]" size="80" value="<?=$website?>" />
        </td>
    </tr>
    
    <tr>
        <th>Weight</th>
        <td>
            <input type="number" name="post[weight]" size="80" value="<?=$weight?>" />
        </td>
    </tr>
    
    <tr>
        <th valign="top">Work Performed</th>
        <td>
            <textarea name="post[work]" cols="80" rows="10"><?=$work?></textarea>
        </td>
    </tr>
</table>