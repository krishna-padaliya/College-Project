<%@ Page Language="C#" MasterPageFile="~/Admin/MasterPage.master" AutoEventWireup="true" CodeFile="product.aspx.cs" Inherits="Admin_product" Title="Admin product" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<asp:GridView align="center" ID="GridView1" runat="server" CellPadding="4" ForeColor="#333333" 
        GridLines="None" DataKeyNames="c_id" EmptyDataText="No Data Found" 
        Width="450" AutoGenerateColumns="False" CellSpacing="2" AllowPaging="True" 
        onpageindexchanging="GridView1_PageIndexChanging" 
        onselectedindexchanged="GridView1_SelectedIndexChanged">
        <RowStyle BackColor="#FFFBD6" ForeColor="#333333" />
        <FooterStyle BackColor="#990000" Font-Bold="True" ForeColor="White" />
        <PagerStyle BackColor="#FFCC66" ForeColor="#333333" HorizontalAlign="Center" />
        <SelectedRowStyle BackColor="#FFCC66" Font-Bold="True" ForeColor="Navy" />
        <HeaderStyle BackColor="#990000" Font-Bold="True" ForeColor="White" />
        <AlternatingRowStyle BackColor="White" />
         <Columns>
             <asp:TemplateField HeaderText="p_id"><ItemTemplate><asp:Label ID="Label1" runat="server" Text='<%# Eval("p_id") %>'></asp:Label></ItemTemplate></asp:TemplateField>
             <asp:TemplateField HeaderText="p_nm"><ItemTemplate><asp:Label ID="Label2" runat="server" Text='<%# Eval("p_nm") %>'></asp:Label></ItemTemplate></asp:TemplateField>
             <asp:TemplateField HeaderText="p_sal"><ItemTemplate><asp:Label ID="Label3" runat="server" Text='<%# Eval("p_sal") %>'></asp:Label></ItemTemplate></asp:TemplateField>
             <asp:TemplateField HeaderText="p_img"><ItemTemplate><asp:Image ID="Image1" runat="server" ImageUrl='<%# Eval("p_img") %>' Height="50" Width="50"/></ItemTemplate></asp:TemplateField>
             <asp:TemplateField HeaderText="Delete"><ItemTemplate><asp:ImageButton ID="imgdeltmp" runat="server" ImageUrl="~/img/delete.gif" OnClick="imgdeltmp_Click" OnClientClick="return confirm('Are you sure to delete?')" AlternateText="Delete"/></ItemTemplate></asp:TemplateField>
        </Columns>
    </asp:GridView>
    <br />
    <br />
    <asp:Button ID="addpro" align="center" runat="server" Text="Add Product" 
     onclick="addpro_Click" />
   </form>
</asp:Content>

