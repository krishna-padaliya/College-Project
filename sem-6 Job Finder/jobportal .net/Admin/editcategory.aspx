<%@ Page Language="C#" MasterPageFile="~/Admin/MasterPage.master" AutoEventWireup="true" CodeFile="editcategory.aspx.cs" Inherits="Admin_editcategory" Title="Edit category" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <table border="1" width="300" height="200" align="center">
        <tr><td colspan="2" align="center"><h3>Edit Category</h3></td></tr>
        
        <tr><td width="100"><asp:Label ID="Label1" runat="server" Text="Category Name"></asp:Label></td>
            <td><asp:TextBox ID="txtcat" runat="server" Text=""></asp:TextBox></td></tr>
        
        <tr><td colspan="2" align="center">
            <asp:HiddenField ID="HiddenField1" runat="server" />
            <asp:Button ID="btnupdate" runat="server" Text="Update" onclick="btnupdate_Click" /></td></tr>
    </table>
</form>

</asp:Content>

