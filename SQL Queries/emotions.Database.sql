USE [master]
GO
/****** Object:  Database [emotions]    Script Date: 12/06/2016 18:09:31 ******/
CREATE DATABASE [emotions]
GO
ALTER DATABASE [emotions] SET COMPATIBILITY_LEVEL = 120
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [emotions].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [emotions] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [emotions] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [emotions] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [emotions] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [emotions] SET ARITHABORT OFF 
GO
ALTER DATABASE [emotions] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [emotions] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [emotions] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [emotions] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [emotions] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [emotions] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [emotions] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [emotions] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [emotions] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [emotions] SET  ENABLE_BROKER 
GO
ALTER DATABASE [emotions] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [emotions] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [emotions] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [emotions] SET ALLOW_SNAPSHOT_ISOLATION ON 
GO
ALTER DATABASE [emotions] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [emotions] SET READ_COMMITTED_SNAPSHOT ON 
GO
ALTER DATABASE [emotions] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [emotions] SET RECOVERY FULL 
GO
ALTER DATABASE [emotions] SET  MULTI_USER 
GO
ALTER DATABASE [emotions] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [emotions] SET DB_CHAINING OFF 
GO
ALTER DATABASE [emotions] SET  READ_WRITE 
GO
