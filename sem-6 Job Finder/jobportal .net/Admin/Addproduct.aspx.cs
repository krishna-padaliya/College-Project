using System;
using System.Collections;
using System.Configuration;
using System.Data;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.HtmlControls;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;
using System.Data.SqlClient;
using System.IO;


public partial class Admin_Addproduct : System.Web.UI.Page
{
    SqlConnection con = new SqlConnection("Data Source=.\\SQLEXPRESS;AttachDbFilename=|DataDirectory|\\Database.mdf;Integrated Security=True;User Instance=True");

    protected void Page_Load(object sender, EventArgs e)
    {
        if (Convert.ToString(System.Web.HttpContext.Current.Session["u_nm"]) == "")
        {
            HttpContext.Current.Response.Redirect("login.aspx");
        }
        if (IsPostBack != true)
        {
            con.Open();
            ddlcat.Items.Add(new ListItem("-Select One-", " "));
            string str = "select * from category";
            SqlCommand cmd = new SqlCommand(str, con);
            SqlDataAdapter sda = new SqlDataAdapter(cmd);
            DataSet ds = new DataSet();
            sda.Fill(ds);
            ddlcat.DataSource = ds;
            ddlcat.DataBind();
            //con.Close();

            //con.Open();
            String query = "select p_id from product where p_id=(select max(p_id) from product)";
            SqlCommand com = new SqlCommand(query, con);
            com.CommandType = CommandType.Text;
            SqlDataReader rdr = com.ExecuteReader();
            if (rdr.Read())
            {
                int count;
                count = Convert.ToInt16(rdr["p_id"]);
                count = count + 1;
                HiddenField1.Value = Convert.ToString(count);
            }
            else
            {
                HiddenField1.Value = "1";
            }
        }
    }
    protected void btnadd_Click(object sender, EventArgs e)
    {
        con.Open();
        String query = "insert into product(c_id,p_nm,p_img,p_sal) values(@c_id,@p_nm,@p_img,@p_sal)";
        SqlCommand cmd = new SqlCommand(query, con);
        cmd.Parameters.AddWithValue("@p_nm", txtpname.Text);

        cmd.Parameters.AddWithValue("@p_sal", txtprice.Text);
        if (CheckFileType(FileUpload1.FileName))
            cmd.Parameters.AddWithValue("@p_img", FilePath(FileUpload1.FileName));
        else
            cmd.Parameters.AddWithValue("@p_img", "Image Not Available");


        cmd.Parameters.AddWithValue("@c_id", ddlcat.SelectedValue);
        cmd.ExecuteNonQuery();
        con.Close();
        Response.Redirect("product.aspx");
    }
    String FilePath(string fileName)
    {
        string ext = Path.GetExtension(fileName);
        string filepath = "~/img/" + "user" + Convert.ToInt32(HiddenField1.Value) + "img" + ext;
        FileUpload1.SaveAs(MapPath(filepath));
        return filepath;
    }
    bool CheckFileType(string fileName)
    {
        string ext = Path.GetExtension(fileName);
        switch (ext.ToLower())
        {
            case ".gif":
                return true;
            case ".png":
                return true;
            case ".jpg":
                return true;
            case ".jpeg":
                return true;
            default:
                return false;
        }
    }

    protected void ddlc_SelectedIndexChanged(object sender, EventArgs e)
    {

    }
}
