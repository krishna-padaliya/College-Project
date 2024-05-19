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

public partial class editresume : System.Web.UI.Page
{
    SqlConnection con = new SqlConnection("Data Source=.\\SQLEXPRESS;AttachDbFilename=|DataDirectory|\\Database.mdf;Integrated Security=True;User Instance=True");

    protected void Page_Load(object sender, EventArgs e)
    {
        if (IsPostBack != true)
        {
            con.Open();
            String query = "select * from resume where p_id=" + Request.QueryString["id"];
            SqlCommand com = new SqlCommand(query, con);
            com.CommandType = CommandType.Text;
            SqlDataReader rdr = com.ExecuteReader();
            if (rdr.Read())
            {
                lblitem_id.Text = Convert.ToString(rdr["p_id"]);
                lblname.Text = Convert.ToString(rdr["p_nm"]);
                lblprice.Text = Convert.ToString(rdr["p_sal"]);;
                Image1.ImageUrl = Convert.ToString(rdr["p_img"]);
                HiddenField1.Value = Convert.ToString(rdr["resume_id"]);
            }
            con.Close();
        }
    }
    protected void btnupdate_Click(object sender, EventArgs e)
    {
        int img = Convert.ToInt32(lblimg.Text) * Convert.ToInt32(txtimg.Text);
        string qrystr;
        qrystr = "update cart set p_img ='" + txtimg.Text + "',p_img='" + img + "'  WHERE resume_id=" + HiddenField1.Value;
        con.Open();
        SqlCommand cmd = new SqlCommand(qrystr, con);
        cmd.CommandType = CommandType.Text;
        cmd.ExecuteNonQuery();
        con.Close();
        Response.Redirect("viewresume.aspx");

    }
}
