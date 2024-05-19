<%@ Page Language="C#" MasterPageFile="~/Admin/MasterPage.master" AutoEventWireup="true" CodeFile="category.aspx.cs" Inherits="Admin_category" Title="Admin category" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<asp:GridView align="center" ID="GridView1" runat="server" CellPadding="4" ForeColor="#333333" 
        GridLines="None" DataKeyNames="c_id" EmptyDataText="No Data Found" 
        Width="450" AutoGenerateColumns="False">
        <RowStyle BackColor="#FFFBD6" ForeColor="#333333" />
        <FooterStyle BackColor="#990000" Font-Bold="True" ForeColor="White" />
        <PagerStyle BackColor="#FFCC66" ForeColor="#333333" HorizontalAlign="Center" />
        <SelectedRowStyle BackColor="#FFCC66" Font-Bold="True" ForeColor="Navy" />
        <HeaderStyle BackColor="#990000" Font-Bold="True" ForeColor="White" />
        <AlternatingRowStyle BackColor="White" />
         <Columns>
             <asp:TemplateField HeaderText="c_id"><ItemTemplate><asp:Label ID="Label1" runat="server" Text='<%# Eval("c_id") %>'></asp:Label></ItemTemplate></asp:TemplateField>
             <asp:TemplateField HeaderText="c_nm"><ItemTemplate><asp:Label ID="Label2" runat="server" Text='<%# Eval("c_nm") %>'></asp:Label></ItemTemplate></asp:TemplateField>
             <asp:TemplateField HeaderText="c_img"><ItemTemplate><asp:Image ID="Image1" runat="server" ImageUrl='<%# Eval("c_img") %>' Height="50" Width="50"/></ItemTemplate></asp:TemplateField>

             <asp:TemplateField HeaderText="Edit"><ItemTemplate><asp:HyperLink ID="hpedit" runat="server" NavigateUrl='<%# "~/admin/editcategory.aspx?id=" + Eval("c_id")  %>' ImageUrl="~/img/edit.jpg"></asp:HyperLink></ItemTemplate></asp:TemplateField>
             <asp:TemplateField HeaderText="Delete"><ItemTemplate><asp:ImageButton ID="imgdeltmp" runat="server" ImageUrl="~/img/delete.gif" OnClick="imgdeltmp_Click" OnClientClick="return confirm('Are you sure to delete?')" AlternateText="Delete"/></ItemTemplate></asp:TemplateField>
        </Columns>
    </asp:GridView>
    <br />
    <br />
    <asp:Button ID="addcat" runat="server" Text="Add category" onclick="addcat_Click" />

</asp:Content>

