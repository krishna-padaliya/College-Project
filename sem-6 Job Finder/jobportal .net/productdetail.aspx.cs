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

public partial class productdetail: System.Web.UI.Page
{
    SqlConnection con = new SqlConnection("Data Source=.\\SQLEXPRESS;AttachDbFilename=|DataDirectory|\\Database.mdf;Integrated Security=True;User Instance=True");
    protected void Page_Load(object sender, EventArgs e)
    {
        con.Open();
        String query = "select * from product where p_id=" + Request.QueryString["id"];
        SqlCommand com = new SqlCommand(query, con);
        SqlDataReader rdr = com.ExecuteReader();
        if (rdr.Read())
        {
            lblp_id.Text = Convert.ToString(rdr["p_id"]);
            lblp_nm.Text = Convert.ToString(rdr["p_nm"]);
            lblp_sal.Text = Convert.ToString(rdr["p_sal"]);
            Image1.ImageUrl = Convert.ToString(rdr["p_img"]);
            hdnc.Value = Convert.ToString(rdr["c_id"]);
        }
        con.Close();
    }
    protected void Button1_Click(object sender, EventArgs e)
    {
        con.Open();
        String query = "insert into resume(p_id,p_nm,p_sal,p_img,c_id,u_nm) values(@p_id,@p_nm,@p_sal,@p_img,@c_id,@u_nm)";
        SqlCommand cmd = new SqlCommand(query, con);
        cmd.Parameters.AddWithValue("@p_id", lblp_id.Text);
        cmd.Parameters.AddWithValue("@p_nm", lblp_nm.Text);
        cmd.Parameters.AddWithValue("@p_sal", lblp_sal.Text);
        cmd.Parameters.AddWithValue("@p_img",Image1.ImageUrl);
        cmd.Parameters.AddWithValue("@c_id", hdnc.Value);
        cmd.Parameters.AddWithValue("@u_nm", Session["u_nm"]);
 
        con.Close();
        Response.Redirect("thankyou.aspx");
    }
}
