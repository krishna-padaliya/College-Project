<%@ Page Language="C#" MasterPageFile="~/Admin/MasterPage.master" AutoEventWireup="true" CodeFile="resume.aspx.cs" Inherits="Admin_resume" Title="Admin Resume" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<br/>
<asp:GridView align="center" ID="GridView1" runat="server" CellPadding="4" ForeColor="#333333" 
        GridLines="None" DataKeyNames="resume_id" EmptyDataText="No Data Found" 
        Width="" AutoGenerateColumns="False">
        <RowStyle BackColor="#FFFBD6" ForeColor="#333333" />
        <FooterStyle BackColor="#990000" Font-Bold="True" ForeColor="White" />
        <PagerStyle BackColor="#FFCC66" ForeColor="#333333" HorizontalAlign="Center" />
        <SelectedRowStyle BackColor="#FFCC66" Font-Bold="True" ForeColor="Navy" />
        <HeaderStyle BackColor="#990000" Font-Bold="True" ForeColor="White" />
        <AlternatingRowStyle BackColor="White" />
         <Columns>
             <asp:TemplateField HeaderText="resume_id"><ItemTemplate><asp:Label ID="Label1" runat="server" Text='<%# Eval("resume_id") %>'></asp:Label></ItemTemplate></asp:TemplateField>
             <asp:TemplateField HeaderText="job_id"><ItemTemplate><asp:Label ID="Label2" runat="server" Text='<%# Eval("p_id") %>'></asp:Label></ItemTemplate></asp:TemplateField>
             <asp:TemplateField HeaderText="job_name"><ItemTemplate><asp:Label ID="Label3" runat="server" Text='<%# Eval("p_nm") %>'></asp:Label></ItemTemplate></asp:TemplateField>
             <asp:TemplateField HeaderText="salary"><ItemTemplate><asp:Label ID="Label4" runat="server" Text='<%# Eval("p_sal") %>'></asp:Label></ItemTemplate></asp:TemplateField>
             <asp:TemplateField HeaderText="resume"><ItemTemplate><asp:Label ID="Label5" runat="server" Text='<%# Eval("p_img") %>'></asp:Label></ItemTemplate></asp:TemplateField>
             <asp:TemplateField HeaderText="Delete"><ItemTemplate><asp:ImageButton ID="imgdeltmp" runat="server" ImageUrl="~/img/delete.gif" OnClick="imgdeltmp_Click" OnClientClick="return confirm('Are you sure to delete?')" AlternateText="Delete"/></ItemTemplate></asp:TemplateField>
             
        </Columns>

    </asp:GridView>
            <br />
        <br />
    <br/>
   </form>

</asp:Content>

