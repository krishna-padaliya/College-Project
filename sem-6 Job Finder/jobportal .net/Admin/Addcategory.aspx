<%@ Page Language="C#" MasterPageFile="~/Admin/MasterPage.master" AutoEventWireup="true" CodeFile="Addcategory.aspx.cs" Inherits="Admin_Addcategory" Title="Addcategory" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
<br /><br /><br /><br /><br />
    <table border="1" width="300" height="200" align="center">
        <tr><td colspan="2" align="center"><h3>Add Category</h3></td></tr>
        
        <tr><td width="100"><asp:Label ID="Label1" runat="server" Text="Category Name"></asp:Label></td>
            <td><asp:TextBox ID="txtcat" runat="server"></asp:TextBox></td></tr>
       
        <tr><td width="100"><asp:Label ID="Label2" runat="server" Text="Category Image"></asp:Label></td>
    <td><asp:FileUpload ID="FileUpload1" runat="server" /></td></tr>
    
             
        
        <tr><td colspan="2" align="center">
        
        <asp:Button ID="btnadd" runat="server" Text="Add" onclick="btnadd_Click" /></td></tr>
    </table>

</asp:Content>

