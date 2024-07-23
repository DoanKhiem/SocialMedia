export const isImage = (attachment: any) => {
    let mime = attachment.mime || attachment.type
    mime = mime.split('/')
    return mime[0].toLowerCase() === 'image'
}
