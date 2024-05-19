<%@ Page Language="C#" MasterPageFile="~/Admin/MasterPage.master" AutoEventWireup="true" CodeFile="Addproduct.aspx.cs" Inherits="Admin_Addproduct" Title="Add jobs" %>

<asp:Content ID="Content1" ContentPlaceHolderID="head" Runat="Server">
    <style type="text/css">
        .style1
        {
            width: 326px;
        }
        .style2
        {
            width: 100px;
        }
        .style4
        {
            width: 219px;
        }
    </style>
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" Runat="Server">
    <form id="form1">
     <table border="1" height="500" align="center" class="style1">
    
    <tr><td colspan="2" align="center"><h3>Add More Jobs</h3></td></tr>
    
    <tr><td width="100" class="style2"><asp:Label ID="Label2" runat="server" Text="Select Category Name"></asp:Label></td>
    <td class="style4"><asp:DropDownList ID="ddlcat" runat="server" AppendDataBoundItems="True" AutoPostBack="True" DataTextField="c_nm" DataValueField="c_id" onselectedindexchanged="ddlc_SelectedIndexChanged"></asp:DropDownList></td></tr>
            
    <tr><td width="100" class="style2"><asp:Label ID="Label1" runat="server" Text="JOB Name"></asp:Label></td>
    <td class="style4"><asp:TextBox ID="txtpname" runat="server"></asp:TextBox></td></tr>

    <tr><td width="100" class="style2"><asp:Label ID="Label5" runat="server" Text="SALARY"></asp:Label></td>
    <td class="style4"><asp:TextBox ID="txtprice" runat="server"></asp:TextBox></td></tr>
    
    <tr><td width="100" class="style2"><asp:Label ID="Label6" runat="server" Text="Job Image"></asp:Label></td>
    <td class="style4"><asp:FileUpload ID="FileUpload1" runat="server" /></td></tr>
    
    <tr><td colspan="2" align="center">
        <asp:HiddenField ID="HiddenField1" runat="server" />
        <asp:Button ID="btnadd" runat="server" Text="Add" onclick="btnadd_Click" /></td></tr>
    
    </table>
</form>
</asp:Content>

