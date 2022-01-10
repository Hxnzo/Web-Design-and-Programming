<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Insert title here</title>
</head>
<body>
<h1>Welcome!</h1>
<b>Name: </b>
<% String name=request.getParameter("first_name");
out.println(name);%>

<b>Age: </b>
<% String age=request.getParameter("age");
out.println(age);%>

<b>Gender: </b>
<% String gender=request.getParameter("gender");
out.println(gender);%>

</body>
</html>