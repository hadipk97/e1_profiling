USE [dropzone]
GO
/****** Object:  Table [dbo].[file_u]    Script Date: 23/7/2019 4:56:11 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[file_u](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[filename] [varchar](max) NULL,
	[ext] [varchar](max) NULL
) ON [PRIMARY] TEXTIMAGE_ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[l_command]    Script Date: 23/7/2019 4:56:11 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[l_command](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[command] [varchar](50) NOT NULL,
	[header] [varchar](50) NULL
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
/****** Object:  Table [dbo].[language]    Script Date: 23/7/2019 4:56:11 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[language](
	[id] [int] IDENTITY(1,1) NOT NULL,
	[lang] [varchar](50) NULL
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
SET IDENTITY_INSERT [dbo].[language] ON 

INSERT [dbo].[language] ([id], [lang]) VALUES (1, N'ms-MY')
SET IDENTITY_INSERT [dbo].[language] OFF
